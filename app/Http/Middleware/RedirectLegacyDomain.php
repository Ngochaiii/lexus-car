<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * 301 từ domain cũ (config seo.legacy_hosts) sang domain chính (seo.site_url),
 * giữ nguyên path + query để Google chuyển toàn bộ tín hiệu SEO sang domain mới.
 */
class RedirectLegacyDomain
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = strtolower($request->getHost());

        if (in_array($host, config('seo.legacy_hosts', []), true)) {
            $target = rtrim(config('seo.site_url'), '/') . $request->getRequestUri();

            return redirect()->away($target, 301);
        }

        return $next($request);
    }
}
