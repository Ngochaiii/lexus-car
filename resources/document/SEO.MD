# 🔧 Technical SEO & Google Ads Readiness Checklist
## Website: tuvangiaxelexus.com

> **Mục tiêu:** Đạt chuẩn kỹ thuật cao nhất để Google đánh giá tốt, sẵn sàng chạy Google Ads với Quality Score cao và Landing Page Experience tối ưu.
>
> **Cách dùng:** Đi từng mục theo thứ tự, tick ✅ khi đã hoàn thành. Mỗi mục có hướng dẫn cụ thể, code mẫu, và công cụ kiểm tra.

---

## 📋 MỤC LỤC

1. [Indexing & Crawlability](#1-indexing--crawlability)
2. [HTML Semantic & Structure](#2-html-semantic--structure)
3. [Meta Tags & SEO On-Page](#3-meta-tags--seo-on-page)
4. [Schema Markup (Structured Data)](#4-schema-markup-structured-data)
5. [Performance & Core Web Vitals](#5-performance--core-web-vitals)
6. [Mobile Optimization](#6-mobile-optimization)
7. [Security & HTTPS](#7-security--https)
8. [Image Optimization](#8-image-optimization)
9. [URL Structure & Internal Linking](#9-url-structure--internal-linking)
10. [Trust Signals & E-E-A-T](#10-trust-signals--e-e-a-t)
11. [Google Ads Specific Requirements](#11-google-ads-specific-requirements)
12. [Tracking & Analytics Setup](#12-tracking--analytics-setup)
13. [Cloudflare Configuration](#13-cloudflare-configuration)
14. [Final Testing Tools](#14-final-testing-tools)

---

## 1. Indexing & Crawlability

> ⚠️ **ƯU TIÊN CAO NHẤT** - Hiện tại website chưa được Google index sau 2 tháng. Phải fix trước.

### 1.1. File `robots.txt`

- [ ] Truy cập `https://tuvangiaxelexus.com/robots.txt` để kiểm tra
- [ ] File phải tồn tại và **KHÔNG** chặn Googlebot

**Mẫu chuẩn cho website Lexus:**

```txt
User-agent: *
Allow: /
Disallow: /wp-admin/
Disallow: /wp-includes/
Disallow: /cgi-bin/
Disallow: /tmp/
Disallow: /*?s=*
Disallow: /*?orderby=*
Disallow: /search/
Disallow: /cart/
Disallow: /checkout/
Disallow: /my-account/

# Cho phép Googlebot crawl tất cả
User-agent: Googlebot
Allow: /

User-agent: Googlebot-Image
Allow: /

User-agent: AdsBot-Google
Allow: /

User-agent: AdsBot-Google-Mobile
Allow: /

# Sitemap
Sitemap: https://tuvangiaxelexus.com/sitemap.xml
Sitemap: https://tuvangiaxelexus.com/sitemap-news.xml
```

> ❌ **TUYỆT ĐỐI KHÔNG** có dòng `Disallow: /` (chặn toàn bộ site)
> ❌ **TUYỆT ĐỐI KHÔNG** chặn `AdsBot-Google` - sẽ làm Google Ads từ chối

### 1.2. Meta Robots Tag

Kiểm tra source code trang chủ (Ctrl+U), tìm:

- [ ] **KHÔNG** có thẻ: `<meta name="robots" content="noindex">`
- [ ] **KHÔNG** có thẻ: `<meta name="robots" content="nofollow">`
- [ ] **KHÔNG** có thẻ: `<meta name="googlebot" content="noindex">`
- [ ] Nếu có, phải xóa hoặc sửa thành: `<meta name="robots" content="index, follow">`

**Code chuẩn nên có:**

```html
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
```

### 1.3. Sitemap.xml

- [ ] Tạo sitemap động tại `https://tuvangiaxelexus.com/sitemap.xml`
- [ ] Sitemap phải chứa tất cả URL quan trọng (trang chủ, các mẫu xe, blog)
- [ ] Submit sitemap vào Google Search Console
- [ ] Mỗi URL có `<lastmod>`, `<changefreq>`, `<priority>`

**Cấu trúc sitemap chuẩn:**

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://tuvangiaxelexus.com/</loc>
        <lastmod>2026-05-08</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://tuvangiaxelexus.com/lexus-rx-350/</loc>
        <lastmod>2026-05-08</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <!-- Các URL khác -->
</urlset>
```

### 1.4. Google Search Console

- [ ] Đăng ký tài khoản tại https://search.google.com/search-console
- [ ] Verify domain bằng DNS TXT record (chuẩn nhất)
- [ ] Submit sitemap.xml
- [ ] Dùng **URL Inspection Tool** để check trang chủ → bấm "Request Indexing"
- [ ] Sau 48h, search `site:tuvangiaxelexus.com` trên Google → phải có kết quả

### 1.5. Canonical URL

- [ ] Mỗi trang có thẻ canonical đúng

```html
<link rel="canonical" href="https://tuvangiaxelexus.com/lexus-rx-350/">
```

> ⚠️ Tránh canonical trỏ về URL khác → Google sẽ không index trang đó

---

## 2. HTML Semantic & Structure

### 2.1. DOCTYPE và Language

- [ ] Khai báo HTML5 chuẩn

```html
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
```

### 2.2. Cấu trúc Heading

- [ ] **CHỈ CÓ MỘT** thẻ `<h1>` duy nhất trên mỗi trang
- [ ] H1 chứa từ khóa chính của trang
- [ ] Không bỏ cấp: H1 → H2 → H3 (không nhảy H1 → H3)
- [ ] Mỗi H2/H3 chứa từ khóa phụ liên quan

**Ví dụ trang Lexus RX 350:**

```html
<h1>Lexus RX 350 2026 - Giá Xe & Đại Lý Chính Hãng Hà Nội</h1>
    <h2>Giá Lăn Bánh Lexus RX 350 Mới Nhất</h2>
        <h3>Lexus RX 350 Premium</h3>
        <h3>Lexus RX 350 Luxury</h3>
        <h3>Lexus RX 350 F Sport</h3>
    <h2>Thông Số Kỹ Thuật Lexus RX 350</h2>
    <h2>Ưu Đãi & Khuyến Mãi Tháng 5/2026</h2>
    <h2>Đại Lý Lexus Thăng Long - Liên Hệ</h2>
```

### 2.3. Semantic HTML5 Tags

- [ ] Dùng tags ngữ nghĩa thay vì `<div>` mọi nơi

```html
<header>
    <nav><!-- Menu chính --></nav>
</header>
<main>
    <article>
        <section><!-- Nội dung chính --></section>
        <aside><!-- Sidebar --></aside>
    </article>
</main>
<footer><!-- Footer --></footer>
```

### 2.4. Accessibility (a11y)

- [ ] Tất cả `<img>` có thuộc tính `alt`
- [ ] Tất cả `<a>` có nội dung mô tả (không dùng "click here")
- [ ] Form input có `<label>` đi kèm
- [ ] Color contrast đạt WCAG AA (≥ 4.5:1 cho text thường)
- [ ] Có thể navigate bằng phím Tab

```html
<!-- ✅ ĐÚNG -->
<a href="/lexus-rx-350/" title="Xem chi tiết Lexus RX 350">Lexus RX 350</a>
<img src="lexus-rx-350.jpg" alt="Lexus RX 350 2026 màu trắng ngọc trai">

<!-- ❌ SAI -->
<a href="/lexus-rx-350/">Click here</a>
<img src="lexus-rx-350.jpg">
```

---

## 3. Meta Tags & SEO On-Page

### 3.1. Title Tag

- [ ] Mỗi trang có title **DUY NHẤT**
- [ ] Độ dài: 50-60 ký tự (tối đa 600 pixels)
- [ ] Chứa từ khóa chính ở đầu
- [ ] Có brand name ở cuối: "| Lexus Thăng Long"

```html
<!-- ✅ Trang chủ -->
<title>Tư Vấn Mua Xe Lexus Chính Hãng | Lexus Thăng Long Hà Nội</title>

<!-- ✅ Trang sản phẩm -->
<title>Lexus RX 350 2026 - Giá Lăn Bánh & Khuyến Mãi | Lexus Thăng Long</title>

<!-- ❌ SAI - quá dài -->
<title>Mua xe Lexus chính hãng tại Hà Nội với giá tốt nhất, ưu đãi lớn, hỗ trợ trả góp - Đại lý Lexus Thăng Long</title>
```

### 3.2. Meta Description

- [ ] Mỗi trang có description **DUY NHẤT**
- [ ] Độ dài: 150-160 ký tự
- [ ] Chứa từ khóa + lời kêu gọi hành động (CTA)
- [ ] Có số điện thoại/ưu đãi để tăng CTR

```html
<meta name="description" content="Lexus RX 350 2026 giá lăn bánh từ 3.43 tỷ. Đại lý Lexus Thăng Long ưu đãi lớn tháng 5: bảo dưỡng 3 năm miễn phí, hỗ trợ trả góp 70%. Hotline: 0xxx.xxx.xxx">
```

### 3.3. Open Graph (Facebook/Zalo Share)

```html
<meta property="og:type" content="website">
<meta property="og:url" content="https://tuvangiaxelexus.com/lexus-rx-350/">
<meta property="og:title" content="Lexus RX 350 2026 - Giá & Khuyến Mãi">
<meta property="og:description" content="Giá lăn bánh từ 3.43 tỷ, ưu đãi lớn...">
<meta property="og:image" content="https://tuvangiaxelexus.com/images/lexus-rx-350-og.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Lexus Thăng Long">
```

### 3.4. Twitter Card

```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Lexus RX 350 2026 - Giá & Khuyến Mãi">
<meta name="twitter:description" content="Giá lăn bánh từ 3.43 tỷ...">
<meta name="twitter:image" content="https://tuvangiaxelexus.com/images/lexus-rx-350-twitter.jpg">
```

### 3.5. Hreflang (nếu có đa ngôn ngữ)

```html
<link rel="alternate" hreflang="vi-VN" href="https://tuvangiaxelexus.com/">
<link rel="alternate" hreflang="x-default" href="https://tuvangiaxelexus.com/">
```

---

## 4. Schema Markup (Structured Data)

> 💡 **Quan trọng:** Schema giúp Google hiểu nội dung và hiển thị Rich Snippets - tăng CTR rất nhiều.

### 4.1. Organization Schema (trang chủ)

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "name": "Lexus Thăng Long",
  "image": "https://tuvangiaxelexus.com/images/showroom.jpg",
  "@id": "https://tuvangiaxelexus.com",
  "url": "https://tuvangiaxelexus.com",
  "telephone": "+84-xxx-xxx-xxx",
  "priceRange": "$$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Ngã tư Phạm Hùng giao Dương Đình Nghệ",
    "addressLocality": "Mễ Trì, Nam Từ Liêm",
    "addressRegion": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.014722,
    "longitude": 105.781944
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday", "Tuesday", "Wednesday", "Thursday",
      "Friday", "Saturday", "Sunday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://www.facebook.com/lexusthanglong",
    "https://www.youtube.com/@lexusthanglong"
  ]
}
</script>
```

### 4.2. Product Schema (trang sản phẩm xe)

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Car",
  "name": "Lexus RX 350 Luxury 2026",
  "image": [
    "https://tuvangiaxelexus.com/images/lexus-rx-350-1.jpg",
    "https://tuvangiaxelexus.com/images/lexus-rx-350-2.jpg"
  ],
  "description": "Lexus RX 350 2026 - SUV hạng sang cỡ trung",
  "brand": {
    "@type": "Brand",
    "name": "Lexus"
  },
  "model": "RX 350 Luxury",
  "vehicleModelDate": "2026",
  "fuelType": "Xăng",
  "vehicleEngine": {
    "@type": "EngineSpecification",
    "engineDisplacement": "2.4L Turbo"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://tuvangiaxelexus.com/lexus-rx-350/",
    "priceCurrency": "VND",
    "price": "3430000000",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "AutoDealer",
      "name": "Lexus Thăng Long"
    }
  }
}
</script>
```

### 4.3. BreadcrumbList Schema

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Trang chủ",
      "item": "https://tuvangiaxelexus.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Lexus RX",
      "item": "https://tuvangiaxelexus.com/lexus-rx/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Lexus RX 350"
    }
  ]
}
</script>
```

### 4.4. FAQ Schema (cho các trang có Q&A)

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Giá lăn bánh Lexus RX 350 2026 bao nhiêu?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Giá lăn bánh Lexus RX 350 Luxury 2026 từ 3.43 tỷ tại Hà Nội."
    }
  }]
}
</script>
```

- [ ] Test schema tại https://search.google.com/test/rich-results
- [ ] Validate tại https://validator.schema.org/

---

## 5. Performance & Core Web Vitals

> 🎯 **Mục tiêu:** Tất cả 3 chỉ số đạt "Good" trên Mobile & Desktop

### 5.1. Core Web Vitals

| Chỉ số | Tốt | Cần cải thiện | Kém |
|--------|-----|---------------|-----|
| **LCP** (Largest Contentful Paint) | ≤ 2.5s | 2.5s - 4s | > 4s |
| **INP** (Interaction to Next Paint) | ≤ 200ms | 200ms - 500ms | > 500ms |
| **CLS** (Cumulative Layout Shift) | ≤ 0.1 | 0.1 - 0.25 | > 0.25 |

### 5.2. Tối ưu LCP

- [ ] Preload ảnh hero/banner chính

```html
<link rel="preload" as="image" href="/images/hero-lexus.webp" fetchpriority="high">
```

- [ ] Dùng `loading="eager"` cho ảnh above-the-fold
- [ ] Dùng `loading="lazy"` cho ảnh below-the-fold
- [ ] Server response time < 600ms (TTFB)

### 5.3. Tối ưu CLS

- [ ] Tất cả `<img>` và `<video>` có `width` và `height`

```html
<img src="lexus-rx.jpg" width="1200" height="800" alt="Lexus RX 350">
```

- [ ] Reserve space cho ads/embeds bằng `aspect-ratio` CSS
- [ ] Font dùng `font-display: swap` + preload

```html
<link rel="preload" href="/fonts/roboto.woff2" as="font" type="font/woff2" crossorigin>
```

```css
@font-face {
    font-family: 'Roboto';
    font-display: swap;
    src: url('/fonts/roboto.woff2') format('woff2');
}
```

### 5.4. Tối ưu INP/JavaScript

- [ ] Defer JavaScript không quan trọng

```html
<script src="non-critical.js" defer></script>
<script src="async-script.js" async></script>
```

- [ ] Minify CSS, JS, HTML
- [ ] Tách Critical CSS inline trong `<head>`
- [ ] Loại bỏ unused CSS/JS
- [ ] Code splitting với dynamic imports

### 5.5. Caching & Compression

- [ ] Bật Gzip/Brotli compression (Cloudflare có sẵn)
- [ ] Set Cache-Control headers chuẩn

```
Cache-Control: public, max-age=31536000, immutable  (cho static assets)
Cache-Control: public, max-age=3600                  (cho HTML)
```

- [ ] Dùng CDN cho static files (Cloudflare đã có)

### 5.6. Resource Hints

```html
<!-- DNS prefetch cho domain bên thứ 3 -->
<link rel="dns-prefetch" href="https://www.google-analytics.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<!-- Preconnect cho domain critical -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Prefetch trang sẽ vào tiếp -->
<link rel="prefetch" href="/lexus-rx-350/">
```

### 5.7. Tools kiểm tra

- [ ] PageSpeed Insights: https://pagespeed.web.dev/
- [ ] GTmetrix: https://gtmetrix.com/
- [ ] WebPageTest: https://www.webpagetest.org/
- [ ] Chrome DevTools → Lighthouse (target: 90+ điểm)

---

## 6. Mobile Optimization

> 📱 Google dùng **Mobile-First Indexing** - mobile UX quyết định ranking.

### 6.1. Viewport

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
```

- [ ] **KHÔNG** dùng `user-scalable=no` (vi phạm accessibility)
- [ ] **KHÔNG** dùng `maximum-scale=1.0`

### 6.2. Touch Targets

- [ ] Nút bấm tối thiểu **48x48 pixels**
- [ ] Khoảng cách giữa các nút ≥ 8px
- [ ] Click vào hotline phải gọi được trực tiếp:

```html
<a href="tel:+84xxxxxxxxx" class="phone-cta">📞 Gọi ngay: 0xxx.xxx.xxx</a>
```

### 6.3. Responsive Design

- [ ] Test trên các breakpoints: 320px, 375px, 414px, 768px, 1024px
- [ ] Không có horizontal scroll trên mobile
- [ ] Font size tối thiểu 16px (tránh iOS zoom khi focus input)
- [ ] Form input dễ nhập trên mobile

### 6.4. Test Mobile-Friendly

- [ ] https://search.google.com/test/mobile-friendly
- [ ] Chrome DevTools → Device Toolbar (Ctrl+Shift+M)
- [ ] Test thực tế trên iPhone + Android

---

## 7. Security & HTTPS

### 7.1. SSL/TLS

- [ ] HTTPS hoạt động trên tất cả URL
- [ ] Redirect 301 từ HTTP → HTTPS
- [ ] Redirect 301 từ www → non-www (hoặc ngược lại - chọn 1)
- [ ] SSL rating ≥ A tại https://www.ssllabs.com/ssltest/

### 7.2. Security Headers

Thêm vào `.htaccess` hoặc Nginx config:

```apache
# Strict Transport Security
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"

# X-Frame-Options
Header always set X-Frame-Options "SAMEORIGIN"

# X-Content-Type-Options
Header always set X-Content-Type-Options "nosniff"

# Referrer Policy
Header always set Referrer-Policy "strict-origin-when-cross-origin"

# Permissions Policy
Header always set Permissions-Policy "geolocation=(), microphone=(), camera=()"

# Content Security Policy (cẩn thận khi cấu hình)
Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:;"
```

### 7.3. Mixed Content

- [ ] Tất cả resources (img, script, css) load qua HTTPS
- [ ] Không có cảnh báo "Not Secure" trên Chrome
- [ ] Test tại https://www.whynopadlock.com/

### 7.4. Test Security

- [ ] https://securityheaders.com/ → đạt rating A trở lên
- [ ] https://observatory.mozilla.org/

---

## 8. Image Optimization

### 8.1. Format

- [ ] Ưu tiên **WebP** hoặc **AVIF** thay vì JPG/PNG
- [ ] Có fallback cho browser cũ:

```html
<picture>
    <source srcset="lexus-rx.avif" type="image/avif">
    <source srcset="lexus-rx.webp" type="image/webp">
    <img src="lexus-rx.jpg" alt="Lexus RX 350 2026" width="1200" height="800" loading="lazy">
</picture>
```

### 8.2. Responsive Images

```html
<img
    src="lexus-rx-800.webp"
    srcset="lexus-rx-400.webp 400w,
            lexus-rx-800.webp 800w,
            lexus-rx-1200.webp 1200w,
            lexus-rx-1600.webp 1600w"
    sizes="(max-width: 600px) 100vw,
           (max-width: 1200px) 50vw,
           33vw"
    alt="Lexus RX 350 2026 màu trắng"
    width="1200"
    height="800"
    loading="lazy"
    decoding="async">
```

### 8.3. Compression

- [ ] JPG: quality 80-85
- [ ] WebP: quality 75-80
- [ ] PNG: dùng TinyPNG hoặc pngquant
- [ ] Tổng size ảnh trang chủ < 1MB

### 8.4. Alt Text

- [ ] Mọi ảnh có alt mô tả nội dung
- [ ] Chứa từ khóa khi phù hợp (không spam)
- [ ] Ảnh decorative dùng `alt=""`

```html
<!-- ✅ ĐÚNG -->
<img alt="Lexus RX 350 F Sport 2026 màu đỏ tại showroom Lexus Thăng Long Hà Nội">

<!-- ❌ SAI - keyword stuffing -->
<img alt="Lexus RX 350 giá Lexus RX 350 mua Lexus RX 350 đại lý Lexus RX 350">
```

### 8.5. Lazy Loading

- [ ] Ảnh below-the-fold dùng `loading="lazy"`
- [ ] Iframe dùng `loading="lazy"`
- [ ] **KHÔNG** lazy load ảnh hero/LCP

---

## 9. URL Structure & Internal Linking

### 9.1. URL Friendly

```
✅ ĐÚNG:
https://tuvangiaxelexus.com/lexus-rx-350-luxury/
https://tuvangiaxelexus.com/bang-gia-xe-lexus-2026/
https://tuvangiaxelexus.com/khuyen-mai/lexus-es-300h/

❌ SAI:
https://tuvangiaxelexus.com/?p=123
https://tuvangiaxelexus.com/product?id=456&cat=2
https://tuvangiaxelexus.com/Lexus_RX_350_Luxury_2026!!!.html
```

**Quy tắc:**
- [ ] Chữ thường, dùng dấu `-` thay vì `_`
- [ ] Bỏ dấu tiếng Việt (lexus-rx-350, không phải lexus-rx-350-mới)
- [ ] Ngắn gọn, có từ khóa
- [ ] Cấu trúc thư mục logic: `/category/product/`

### 9.2. Breadcrumb Navigation

```html
<nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/">Trang chủ</a></li>
        <li><a href="/lexus-rx/">Lexus RX</a></li>
        <li aria-current="page">Lexus RX 350 Luxury</li>
    </ol>
</nav>
```

### 9.3. Internal Linking

- [ ] Mỗi trang có ít nhất 3-5 internal links
- [ ] Anchor text tự nhiên, có từ khóa
- [ ] Link đến trang quan trọng nhất từ trang chủ
- [ ] Không có broken links (404)

**Test broken links:**
- [ ] https://www.brokenlinkcheck.com/
- [ ] Screaming Frog SEO Spider (free 500 URLs)

### 9.4. URL Redirects

- [ ] Dùng 301 (permanent) thay vì 302 (temporary)
- [ ] Tránh redirect chains (A → B → C)
- [ ] Tối đa 1 redirect/URL

---

## 10. Trust Signals & E-E-A-T

> 🛡️ **E-E-A-T** = Experience, Expertise, Authoritativeness, Trustworthiness
> Đây là yếu tố Google đặc biệt quan trọng với ngành **YMYL** (xe hơi giá trị cao nằm trong nhóm này)

### 10.1. Thông tin doanh nghiệp đầy đủ

- [ ] Trang **Giới thiệu** có:
  - Tên công ty pháp lý
  - Mã số thuế (MST)
  - Địa chỉ showroom (có Google Maps embed)
  - Hotline + email
  - Giờ làm việc
  - **Giấy chứng nhận đại lý ủy quyền chính hãng từ Lexus Vietnam** (ảnh chụp)
  - Lịch sử đại lý
  - Đội ngũ nhân viên (ảnh + tên + chức vụ)

### 10.2. Trang pháp lý bắt buộc

- [ ] **Chính sách bảo mật** (Privacy Policy)
- [ ] **Điều khoản sử dụng** (Terms of Service)
- [ ] **Chính sách bảo hành**
- [ ] **Chính sách đổi trả**
- [ ] **Chính sách giao xe**

### 10.3. Footer chuẩn

```html
<footer>
    <div class="company-info">
        <h3>LEXUS THĂNG LONG</h3>
        <p>Đại lý ủy quyền chính hãng Lexus tại Việt Nam</p>
        <p>📍 Ngã tư Phạm Hùng giao Dương Đình Nghệ, Mễ Trì, Nam Từ Liêm, Hà Nội</p>
        <p>📞 Hotline: <a href="tel:+84xxx">0xxx.xxx.xxx</a></p>
        <p>📧 Email: contact@tuvangiaxelexus.com</p>
        <p>MST: 010xxxxxxx</p>
    </div>
    <div class="legal-links">
        <a href="/chinh-sach-bao-mat/">Chính sách bảo mật</a>
        <a href="/dieu-khoan-su-dung/">Điều khoản sử dụng</a>
        <a href="/chinh-sach-bao-hanh/">Chính sách bảo hành</a>
    </div>
    <p class="copyright">© 2026 Lexus Thăng Long. All rights reserved.</p>
</footer>
```

### 10.4. Trust Badges

- [ ] Logo "Đại lý ủy quyền chính hãng Lexus"
- [ ] Chứng nhận DMCA Protected
- [ ] Logo Bộ Công Thương (đã thông báo website)
- [ ] SSL certificate badge

### 10.5. Đăng ký Bộ Công Thương

- [ ] Đăng ký website thương mại điện tử tại http://online.gov.vn/
- [ ] Hiển thị logo "Đã thông báo Bộ Công Thương" ở footer (link về trang xác nhận)

> ⚠️ **Bắt buộc theo luật Việt Nam** với website thương mại

---

## 11. Google Ads Specific Requirements

### 11.1. Landing Page Quality

- [ ] Nội dung trang đích **liên quan trực tiếp** với từ khóa quảng cáo
- [ ] Thông tin liên hệ rõ ràng (hotline ở vị trí dễ thấy)
- [ ] Form đăng ký tư vấn ngắn gọn (max 4 fields)
- [ ] Trust signals: ảnh showroom, ảnh giấy chứng nhận, review khách hàng
- [ ] Page load < 3 giây trên mobile
- [ ] Không có popup gây khó chịu (interstitial ads)

### 11.2. Tránh các chính sách bị cấm

Google Ads sẽ **từ chối/đình chỉ** nếu vi phạm:

- [ ] **KHÔNG** có nội dung copy từ website khác
- [ ] **KHÔNG** có claim sai sự thật về giá ("rẻ nhất Việt Nam")
- [ ] **KHÔNG** có pop-up exit-intent quá aggressive
- [ ] **KHÔNG** redirect bất ngờ đến trang khác
- [ ] **KHÔNG** thu thập thông tin nhạy cảm không cần thiết
- [ ] **KHÔNG** có malware, phishing, scam content

### 11.3. Quảng cáo thương hiệu Lexus

Vì là đại lý ủy quyền, bạn **được phép** dùng:
- Tên thương hiệu "Lexus" trong title, description ads
- Logo Lexus (có giấy ủy quyền)
- Tên model: RX, ES, NX, GX, LS, LX, LM

Nhưng **không nên**:
- Claim là "Lexus Vietnam" (chỉ Toyota Vietnam mới được)
- Dùng URL chứa "lexus" trong display URL nếu Google flag

### 11.4. Verify Advertiser

Google sẽ yêu cầu **Advertiser Verification** (bắt buộc):

- [ ] Chuẩn bị **Giấy đăng ký kinh doanh** (PDF rõ nét)
- [ ] **Giấy chứng nhận đại lý ủy quyền** từ Lexus Vietnam
- [ ] **CCCD/CMND** người đại diện
- [ ] **Hóa đơn** từ Lexus Vietnam (nếu có)
- [ ] Quá trình verify: 3-5 ngày làm việc

### 11.5. Setup Conversion Tracking

Đây là **bắt buộc** để Google Ads tối ưu:

```html
<!-- Google Tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-XXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-XXXXXXXXX');
</script>

<!-- Conversion: Form Submit -->
<script>
function trackFormSubmit() {
    gtag('event', 'conversion', {
        'send_to': 'AW-XXXXXXXXX/YYYYYYY',
        'value': 1.0,
        'currency': 'VND'
    });
}
</script>

<!-- Conversion: Phone Click -->
<a href="tel:+84xxx" onclick="gtag('event', 'conversion', {
    'send_to': 'AW-XXXXXXXXX/ZZZZZZZ'
});">📞 Gọi ngay</a>
```

---

## 12. Tracking & Analytics Setup

### 12.1. Google Tag Manager (GTM)

- [ ] Tạo GTM container tại https://tagmanager.google.com/
- [ ] Cài GTM code vào tất cả các trang (head + body)

```html
<!-- GTM - Head -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXXX');</script>

<!-- GTM - Body (ngay sau <body>) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
```

### 12.2. Google Analytics 4 (GA4)

- [ ] Tạo property GA4
- [ ] Cài qua GTM (recommended)
- [ ] Setup các events quan trọng:
  - `form_submit` - Khi khách submit form
  - `phone_click` - Khi click hotline
  - `zalo_click` - Khi click Zalo
  - `messenger_click` - Khi click Messenger
  - `view_car` - Khi xem chi tiết xe
  - `download_brochure` - Tải brochure

### 12.3. Google Search Console

- [ ] Verify ownership
- [ ] Submit sitemap
- [ ] Monitor Coverage (lỗi indexing)
- [ ] Monitor Core Web Vitals
- [ ] Monitor Search queries

### 12.4. Microsoft Clarity (miễn phí - rất tốt)

- [ ] Đăng ký tại https://clarity.microsoft.com/
- [ ] Cài tracking code
- [ ] Xem heatmap, session recording để tối ưu UX

### 12.5. Facebook Pixel (cho retargeting)

- [ ] Cài Meta Pixel để chạy retargeting trên FB/IG
- [ ] Setup events: ViewContent, Lead, Contact

---

## 13. Cloudflare Configuration

### 13.1. Settings cần kiểm tra

**Security → Bots:**
- [ ] **TẮT** "Bot Fight Mode" (đang chặn cả Googlebot)
- [ ] **TẮT** "Super Bot Fight Mode" nếu có
- [ ] Whitelist Googlebot, Bingbot, AdsBot-Google trong WAF rules

**Security → WAF:**
- [ ] Tạo rule whitelist Google bots:

```
(http.user_agent contains "Googlebot") or
(http.user_agent contains "AdsBot-Google") or
(http.user_agent contains "Mediapartners-Google")
→ Action: Skip
```

**Speed → Optimization:**
- [ ] Bật **Auto Minify** (HTML, CSS, JS)
- [ ] Bật **Brotli compression**
- [ ] Bật **Early Hints**
- [ ] Bật **Rocket Loader** (test kỹ trước khi bật vì có thể gây lỗi)

**Caching → Configuration:**
- [ ] Browser Cache TTL: 4 hours (hoặc cao hơn)
- [ ] Caching Level: Standard
- [ ] Always Online: ON

**SSL/TLS:**
- [ ] SSL mode: **Full (strict)** - không dùng Flexible
- [ ] Always Use HTTPS: ON
- [ ] Automatic HTTPS Rewrites: ON
- [ ] Minimum TLS Version: 1.2

**Network:**
- [ ] HTTP/3 (QUIC): ON
- [ ] 0-RTT Connection Resumption: ON
- [ ] WebSockets: ON

### 13.2. Page Rules / Cache Rules

```
Rule 1: tuvangiaxelexus.com/wp-admin/*
- Cache Level: Bypass
- Disable Apps

Rule 2: tuvangiaxelexus.com/*.{jpg,png,webp,css,js,woff2}
- Cache Level: Cache Everything
- Edge Cache TTL: 1 month
- Browser Cache TTL: 1 month
```

---

## 14. Final Testing Tools

### 14.1. SEO & Technical

| Công cụ | URL | Mục đích |
|---------|-----|----------|
| Google PageSpeed Insights | https://pagespeed.web.dev/ | Core Web Vitals, performance |
| Google Rich Results Test | https://search.google.com/test/rich-results | Schema validation |
| Google Mobile-Friendly Test | https://search.google.com/test/mobile-friendly | Mobile UX |
| Google Search Console | https://search.google.com/search-console | Indexing status |
| Schema Validator | https://validator.schema.org/ | Schema markup |
| GTmetrix | https://gtmetrix.com/ | Performance detail |
| WebPageTest | https://www.webpagetest.org/ | Performance from multiple locations |
| SSL Labs | https://www.ssllabs.com/ssltest/ | SSL grade |
| Security Headers | https://securityheaders.com/ | Security headers |
| Screaming Frog | https://www.screamingfrog.co.uk/seo-spider/ | Crawl audit (free 500 URLs) |
| Ahrefs Webmaster Tools | https://ahrefs.com/webmaster-tools | Free SEO audit |
| Bing Webmaster Tools | https://www.bing.com/webmasters | Bing indexing |

### 14.2. Lighthouse Targets

Chạy Lighthouse trên Chrome DevTools, target tối thiểu:

- ✅ Performance: **90+**
- ✅ Accessibility: **95+**
- ✅ Best Practices: **95+**
- ✅ SEO: **100**

### 14.3. Test Checklist cuối cùng

Trước khi bật Google Ads, đảm bảo:

- [ ] `site:tuvangiaxelexus.com` trên Google → có ít nhất 10 kết quả
- [ ] PageSpeed Insights → tất cả Core Web Vitals đạt "Good"
- [ ] Mobile-Friendly Test → Pass
- [ ] Rich Results Test → Schema hợp lệ
- [ ] SSL Labs → Grade A
- [ ] Security Headers → Grade A
- [ ] Lighthouse SEO → 100/100
- [ ] Tất cả trang pháp lý đã có
- [ ] Footer có thông tin doanh nghiệp đầy đủ
- [ ] Conversion tracking đã setup và test thành công
- [ ] Đã đăng ký Bộ Công Thương

---

## 📌 LỘ TRÌNH THỰC HIỆN

### Tuần 1: Foundation
1. Fix indexing (robots.txt, meta robots, Cloudflare)
2. Verify Google Search Console + submit sitemap
3. Hoàn thiện trang pháp lý

### Tuần 2: Technical SEO
4. Tối ưu meta tags, heading structure
5. Cài đặt schema markup
6. Tối ưu hình ảnh

### Tuần 3: Performance
7. Tối ưu Core Web Vitals
8. Cấu hình Cloudflare
9. Mobile optimization

### Tuần 4: Tracking & Launch
10. Cài GTM, GA4, Conversion tracking
11. Test toàn bộ checklist
12. Verify Advertiser với Google Ads
13. Bắt đầu chạy ads với ngân sách nhỏ

---

## 🚨 LƯU Ý QUAN TRỌNG

> 1. **Đừng chạy Google Ads trước khi fix indexing.** Tiền sẽ mất, tài khoản có thể bị flag.
>
> 2. **Backup website trước khi sửa code.** Nếu dùng WordPress, cài plugin UpdraftPlus.
>
> 3. **Test trên staging trước.** Không sửa trực tiếp production.
>
> 4. **Theo dõi Google Search Console hàng ngày** sau khi launch để phát hiện vấn đề sớm.
>
> 5. **Giấy chứng nhận đại lý từ Lexus Vietnam** là tài sản quý giá nhất - upload lên trang Giới thiệu sẽ tăng trust score rất nhiều.

---

**Tác giả:** Technical Audit Checklist
**Cập nhật:** 08/05/2026
**Phiên bản:** 1.0
**Dành cho:** tuvangiaxelexus.com (Lexus Thăng Long)
