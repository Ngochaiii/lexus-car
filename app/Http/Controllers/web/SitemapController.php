<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->toIso8601String();

        $urls = [
            ['loc' => route('web.home'),         'lastmod' => $now, 'changefreq' => 'daily',   'priority' => '1.0'],
            ['loc' => route('web.home.regis'),   'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('web.about'),        'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => route('tech_car.index'),   'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('web.blogs'),        'lastmod' => $now, 'changefreq' => 'daily',   'priority' => '0.8'],
            ['loc' => route('legal.privacy'),    'lastmod' => $now, 'changefreq' => 'yearly',  'priority' => '0.3'],
            ['loc' => route('legal.terms'),      'lastmod' => $now, 'changefreq' => 'yearly',  'priority' => '0.3'],
            ['loc' => route('legal.warranty'),   'lastmod' => $now, 'changefreq' => 'yearly',  'priority' => '0.3'],
            ['loc' => route('legal.return'),     'lastmod' => $now, 'changefreq' => 'yearly',  'priority' => '0.3'],
            ['loc' => route('legal.delivery'),   'lastmod' => $now, 'changefreq' => 'yearly',  'priority' => '0.3'],
        ];

        foreach (['rx','lm','nx','lx','ls','gx','es'] as $slug) {
            $urls[] = [
                'loc' => route('products.' . $slug),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ];
        }

        Post::published()
            ->select(['slug', 'updated_at', 'published_at'])
            ->latest('published_at')
            ->chunk(200, function ($posts) use (&$urls) {
                foreach ($posts as $post) {
                    $urls[] = [
                        'loc' => route('web.blogs.detail', $post->slug),
                        'lastmod' => optional($post->updated_at ?? $post->published_at)->toIso8601String(),
                        'changefreq' => 'weekly',
                        'priority' => '0.7',
                    ];
                }
            });

        return response()
            ->view('src.web.sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
