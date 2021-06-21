<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💨</text></svg>">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    </head>
    <body class="flex flex-col h-full min-h-screen p-16 font-sans antialiased text-gray-900 min-w-screen">
        @include('_layouts.banner')
        
        <header class="mt-16 mb-16 space-y-4 md:mt-8">
            <h1 class="text-3xl font-bold">Tinywind</h1>
            <p>A small collection of free Tailwind components.</p>
        </header>

        <main class="flex-1">
            @yield('body')
        </main>

        <footer class="mt-16 space-x-4">
            <x-link href="https://github.com/ryangjchandler/tinywind" target="_blank">GitHub</x-link>
            <x-link href="https://github.com/sponsors/ryangjchandler" target="_blank">Sponsor development</x-link>
        </footer>
    </body>
</html>
