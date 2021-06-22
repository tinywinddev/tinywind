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
    <body class="flex flex-col h-full min-h-screen p-8 font-sans antialiased text-gray-900 md:p-16 min-w-screen">
        @include('_layouts.banner')
        
        <header class="mt-16 mb-8 space-y-4 md:mb-16 md:mt-8">
            <a href="/" class="hover:underline focus:underline">
                <h1 class="text-3xl font-bold">Tinywind</h1>
            </a>
            <p>A small collection of free Tailwind components.</p>

            <nav class="items-center hidden space-x-4 md:flex">
                <x-link href="/pages/about">About</x-link>
                <x-link href="/components">Components</x-link>
                <x-link href="/pages/documentation">Documentation</x-link>
                <x-link href="/pages/changelog">Changelog</x-link>
            </nav>

            <nav class="block space-y-2 md:hidden">
                <div class="space-x-4">
                    <x-link href="/pages/about">About</x-link>
                    <x-link href="/components">Components</x-link>
                </div>
                <div class="space-x-4">
                    <x-link href="/pages/documentation">Documentation</x-link>
                    <x-link href="/pages/changelog">Changelog</x-link>
                </div>
            </nav>
        </header>

        <main class="flex-1">
            @yield('body')
        </main>

        <footer class="mt-8 space-x-4 md:mt-16">
            <x-link href="https://github.com/ryangjchandler/tinywind" target="_blank">GitHub</x-link>
            <x-link href="https://github.com/sponsors/ryangjchandler" target="_blank">Sponsor development</x-link>
        </footer>
    </body>
</html>
