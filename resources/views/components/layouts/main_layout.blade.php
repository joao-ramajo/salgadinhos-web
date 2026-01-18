<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>{{ $pageTitle ? "$pageTitle - Salgadinhos Web" : 'Salgadinhos Web - O Catálogo Definitivo da Crocância' }}
    </title>

    {{-- Meta Description --}}
    <meta name="description"
        content="{{ $metaDescription ?? 'Compare, organize e ranqueie seus salgadinhos favoritos. Descubra os melhores sabores com avaliações da comunidade. Simples, direto e crocante!' }}">

    {{-- Meta Keywords --}}
    <meta name="keywords"
        content="salgadinhos, snacks, batata chips, avaliações, ranking, comparação, doritos, ruffles, cheetos, fandangos, sabores">

    {{-- Author --}}
    <meta name="author" content="Salgadinhos Web">

    {{-- Robots --}}
    <meta name="robots" content="index, follow">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="{{ $pageTitle ? "$pageTitle - Salgadinhos Web" : 'Salgadinhos Web - O Catálogo Definitivo da Crocância' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Compare, organize e ranqueie seus salgadinhos favoritos. Descubra os melhores sabores com avaliações da comunidade.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('assets/images/og-image.jpg') }}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Salgadinhos Web">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $pageTitle ? "$pageTitle - Salgadinhos Web" : 'Salgadinhos Web' }}">
    <meta name="twitter:description"
        content="{{ $metaDescription ?? 'Compare e avalie os melhores salgadinhos do mercado.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('assets/images/og-image.jpg') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon">

    {{-- Theme Color --}}
    <meta name="theme-color" content="#FB923C">
    <meta name="msapplication-TileColor" content="#FB923C">

    {{-- Preconnect for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    {{-- Styles --}}
    @vite('resources/css/app.css')

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Salgadinhos Web",
        "description": "O catálogo definitivo da crocância. Compare, organize e ranqueie seus salgadinhos favoritos.",
        "url": "{{ url('/') }}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ url('/') }}/busca?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Salgadinhos Web",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('assets/images/logo.png') }}"
            }
        }
    }
    </script>

    {{-- Additional page-specific structured data can be injected here --}}
    @stack('structured-data')

    {{-- Additional head content --}}
    @stack('head')
</head>

<body class="min-h-screen flex flex-col">
    {{-- Header --}}
    <x-layouts.header />

    {{-- Main Content --}}
    <main id="main-content" role="main" class="flex-1">
        {{ $slot }}
    </main>

    {{-- Footer (if you want to add one) --}}
    @if (isset($showFooter) && $showFooter)
        <x-layouts.footer />
    @endif

    {{-- Additional scripts --}}
    @stack('scripts')
</body>

</html>
