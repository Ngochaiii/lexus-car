# Hướng Dẫn Cấu Hình Cloudflare cho tuvangiaxelexus.com

> Mục tiêu: Mở khóa Googlebot/AdsBot, đảm bảo HTTPS strict, bật performance & cache đúng cách.

---

## 1. Security → Bots (CHẶN ĐẦU TIÊN PHẢI MỞ)

| Tùy chọn | Giá trị | Ghi chú |
|---|---|---|
| Bot Fight Mode | **OFF** | Đang chặn cả Googlebot |
| Super Bot Fight Mode | **OFF** | Tương tự |
| AI Scrapers and Crawlers | OFF | Để Googlebot crawl bình thường |

## 2. Security → WAF → Custom Rules

Tạo rule whitelist Google bots (Action: **Skip → All managed rules**):

```
(http.user_agent contains "Googlebot")
or (http.user_agent contains "AdsBot-Google")
or (http.user_agent contains "Mediapartners-Google")
or (http.user_agent contains "Bingbot")
```

## 3. SSL/TLS

- SSL Mode: **Full (strict)** — KHÔNG dùng Flexible (sẽ tạo redirect loop)
- Edge Certificates → **Always Use HTTPS**: ON
- Edge Certificates → **Automatic HTTPS Rewrites**: ON
- Edge Certificates → **Minimum TLS Version**: 1.2
- Edge Certificates → **Opportunistic Encryption**: ON
- Edge Certificates → **TLS 1.3**: ON

## 4. Speed → Optimization

| Tùy chọn | Giá trị |
|---|---|
| Auto Minify (HTML/CSS/JS) | ON |
| Brotli | ON |
| Early Hints | ON |
| Rocket Loader | OFF (test rồi mới bật, dễ vỡ JS) |

## 5. Caching → Configuration

- Caching Level: **Standard**
- Browser Cache TTL: **4 hours** (hoặc cao hơn)
- Always Online: **ON**
- Crawler Hints: **ON**

## 6. Caching → Cache Rules

```
Rule: Static assets cache 1 month
- If: URI Path matches "*.{jpg,jpeg,png,webp,avif,svg,gif,ico,css,js,woff,woff2,ttf,eot}"
- Then:
    - Cache: Eligible for cache
    - Edge TTL: 1 month
    - Browser TTL: 1 month
```

```
Rule: Bypass cache cho admin
- If: URI Path matches "/admin/*"
- Then: Bypass cache
```

## 7. Network

- HTTP/3 (QUIC): **ON**
- 0-RTT Connection Resumption: **ON**
- WebSockets: **ON**
- gRPC: ON

## 8. Rules → Page Rules / Transform Rules

Nếu chưa có: redirect www → non-www (hoặc ngược lại — chọn 1):

```
Rule: www.tuvangiaxelexus.com/*
- Forwarding URL (301 - Permanent Redirect)
- Destination: https://tuvangiaxelexus.com/$1
```

## 9. DNS

- A record `tuvangiaxelexus.com` → IP server (proxied: ON — orange cloud)
- CNAME `www` → `tuvangiaxelexus.com` (proxied: ON)

## 10. Test sau khi cấu hình

```bash
# 1. Verify SSL
curl -I https://tuvangiaxelexus.com
# Phải có: HTTP/2 200, strict-transport-security header

# 2. Verify Googlebot không bị chặn
curl -I -A "Googlebot" https://tuvangiaxelexus.com
# Phải trả 200, không phải 403/503

# 3. Verify AdsBot
curl -I -A "AdsBot-Google" https://tuvangiaxelexus.com

# 4. Verify HTTP → HTTPS redirect
curl -I http://tuvangiaxelexus.com
# Phải có Location: https://...
```

## 11. Sau khi xong tất cả

- Vào Google Search Console → URL Inspection → request indexing trang chủ
- Sau 24-48h, search `site:tuvangiaxelexus.com` trên Google
- Submit sitemap: `https://tuvangiaxelexus.com/sitemap.xml` trong Search Console

---

## Checklist nhanh

- [ ] Bot Fight Mode OFF
- [ ] WAF rule whitelist Googlebot
- [ ] SSL Full (strict)
- [ ] Always Use HTTPS ON
- [ ] Auto Minify + Brotli ON
- [ ] Cache rule cho static assets
- [ ] HTTP/3 ON
- [ ] DNS proxied
- [ ] Curl test với User-Agent Googlebot trả 200
- [ ] Submit sitemap.xml ở Search Console
