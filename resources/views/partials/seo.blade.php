@php
    $seoData = $seo ?? [];
    $siteUrl = rtrim(config('seo.site_url'), '/');
    $siteName = config('seo.site_name');
    $org = config('seo.organization');

    $title = $seoData['title'] ?? config('seo.default_title');
    $description = $seoData['description'] ?? config('seo.default_description');
    $keywords = $seoData['keywords'] ?? config('seo.default_keywords');
    $canonical = $seoData['canonical'] ?? ($siteUrl . request()->getPathInfo());
    $ogImage = $seoData['og_image'] ?? ($siteUrl . config('seo.default_og_image'));
    $ogType = $seoData['og_type'] ?? 'website';
    $robots = $seoData['robots'] ?? 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1';
    $extraSchemas = $seoData['schemas'] ?? [];

    $jsonFlags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;

    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'AutoDealer',
        '@id' => $siteUrl,
        'name' => $org['name'],
        'legalName' => $org['legal_name'],
        'url' => $siteUrl,
        'logo' => $siteUrl . '/web/assets/images/lexus_logo.png',
        'image' => $siteUrl . '/web/assets/images/lexus_logo.png',
        'telephone' => $org['phone'],
        'email' => $org['email'],
        'priceRange' => '$$$$',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $org['street'],
            'addressLocality' => $org['locality'],
            'addressRegion' => $org['region'],
            'postalCode' => $org['postal_code'],
            'addressCountry' => $org['country'],
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $org['lat'],
            'longitude' => $org['lng'],
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
            'opens' => $org['opens'],
            'closes' => $org['closes'],
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => $org['rating_value'],
            'reviewCount' => $org['review_count'],
        ],
        'sameAs' => $org['social'],
    ];

    $breadcrumbSchema = null;
    if (!empty($breadcrumbs) && is_array($breadcrumbs)) {
        $items = [];
        foreach (array_values($breadcrumbs) as $i => $b) {
            $entry = [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $b['name'],
            ];
            if (!empty($b['url'])) {
                $entry['item'] = str_starts_with($b['url'], 'http') ? $b['url'] : $siteUrl . $b['url'];
            }
            $items[] = $entry;
        }
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $items,
        ];
    }
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="{{ $robots }}">
<meta name="googlebot" content="{{ $robots }}">
<meta name="author" content="{{ $siteName }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="canonical" href="{{ $canonical }}">
<link rel="alternate" hreflang="vi-VN" href="{{ $canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonical }}">

<link rel="icon" type="image/png" href="{{ asset('web/assets/images/lexus_logo.png') }}">
<link rel="apple-touch-icon" href="{{ asset('web/assets/images/lexus_logo.png') }}">

<meta property="og:type" content="{{ $ogType }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="{{ config('seo.default_locale') }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">

<script type="application/ld+json">{!! json_encode($organizationSchema, $jsonFlags) !!}</script>

@if($breadcrumbSchema)
<script type="application/ld+json">{!! json_encode($breadcrumbSchema, $jsonFlags) !!}</script>
@endif

@foreach($extraSchemas as $schema)
    @if(!empty($schema))
<script type="application/ld+json">{!! json_encode($schema, $jsonFlags) !!}</script>
    @endif
@endforeach
