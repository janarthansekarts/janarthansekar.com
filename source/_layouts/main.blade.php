<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $page->siteName)</title>

    <meta name="description" content="@yield('description', $page->siteDescription)">
    <meta name="author" content="{{ $page->siteAuthor }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', $page->siteName)" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="@yield('description', $page->siteDescription)" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    @include('_partials.nav')

    <main class="max-w-3xl mx-auto px-6 py-12 md:py-20">
        @yield('body')
    </main>

    @include('_partials.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
