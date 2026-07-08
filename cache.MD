# Vấn đề: Đổi ảnh nhưng web vẫn hiển thị ảnh cũ

## Bối cảnh
- Dự án: Laravel, domain `tuvangiaxelexus.com`
- Đã pull code mới, ảnh trong repo đã thay, đã chạy `php artisan config:clear`
- Web vẫn hiển thị ảnh cũ

## Nguyên nhân đã xác định
1. **Ảnh giữ nguyên tên file** khi thay nội dung mới (ví dụ `rx/trang2.jpg`) → browser/CDN không biết file đã đổi, vẫn dùng bản cache theo URL cũ.
2. **Site đang dùng Cloudflare** (xác nhận qua các dấu hiệu trong HTML: `/cdn-cgi/l/email-protection`, `cloudflare-static/email-decode.min.js`, script `cloudflareinsights.com/beacon.min.js` kèm `cf-beacon` token).
3. Cloudflare cache ảnh **ở edge server theo URL**, không tự biết origin đã đổi file → dù server gốc đã có ảnh mới, Cloudflare vẫn trả bản cache cũ cho đến khi hết TTL hoặc được purge thủ công.
4. `php artisan config:clear` chỉ xóa **config cache** của Laravel, không liên quan gì đến cache ảnh ở CDN hay browser.

## Cách fix ngay (khắc phục tức thời)
1. Đăng nhập **Cloudflare Dashboard** → chọn đúng domain.
2. Vào **Caching → Configuration → Purge Cache**.
3. Chọn **Custom Purge**, dán chính xác URL ảnh cần xóa cache, ví dụ:
   ```
   http://tuvangiaxelexus.com/web/assets/images/rx/trang2.jpg
   ```
   (hoặc **Purge Everything** nếu muốn xóa cache toàn site — sẽ khiến load đầu chậm hơn cho mọi resource).
4. Hard refresh trình duyệt (`Ctrl+Shift+R` / `Cmd+Shift+R`) để xóa luôn cache local.
5. Ảnh mới sẽ hiển thị.

## Fix lâu dài (tránh lặp lại vấn đề)
Thêm query string version dựa theo thời gian sửa file, thay vì giữ nguyên URL tĩnh:

```php
<img src="{{ asset('web/assets/images/rx/trang2.jpg') }}?v={{ filemtime(public_path('web/assets/images/rx/trang2.jpg')) }}">
```

- `filemtime()` tự động đổi giá trị mỗi khi file ảnh được ghi đè → URL thay đổi → cả browser lẫn Cloudflare coi đây là resource mới, tự bypass cache cũ.
- Không cần vào Cloudflare Dashboard purge thủ công mỗi lần đổi ảnh nữa.
- Áp dụng tương tự cho các ảnh khác được hardcode trong code (ví dụ object `colorGalleries` trong file JS của theme, đang liệt kê danh sách ảnh theo màu xe).

## Cách kiểm tra có CDN/proxy cache hay không (tham khảo sau này)
- Mở DevTools (F12) → tab **Network** → filter **Img** → reload trang → click vào ảnh cần xem.
- Kiểm tra **Response Headers**, chú ý:
  - `Cache-Control`, `Expires` — thời gian cache được phép.
  - `Server` — cho biết loại server/proxy (`cloudflare`, `nginx`, `LiteSpeed`...).
  - `CF-Cache-Status`, `X-Cache`, `Age`, `X-Served-By` — nếu có bất kỳ header nào trong nhóm này, xác nhận có CDN/cache layer đứng trước origin.
- Hoặc dùng `curl -I <url-ảnh>` từ máy có DNS resolve được domain (không chạy được nếu server không có DNS ra ngoài).
