@extends('_layouts.main')

@section('body')
    <section id="index" class="max-w-xl space-y-8">
        <a href="/pages/about" class="block">
            <div class="flex items-center justify-between px-6 py-4 border border-gray-300 rounded-md hover:border-gray-500">
                <h3 class="text-lg font-medium">Learn more about Tinywind</h3>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.75 8.75L14.25 12L10.75 15.25"></path>
                </svg>
            </div>
        </a>
        <a href="/components" class="block">
            <div class="flex items-center justify-between px-6 py-4 border border-gray-300 rounded-md hover:border-gray-500">
                <h3 class="text-lg font-medium">Browse the components</h3>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.75 8.75L14.25 12L10.75 15.25"></path>
                </svg>
            </div>
        </a>
        <a href="/pages/changelog" class="block">
            <div class="flex items-center justify-between px-6 py-4 border border-gray-300 rounded-md hover:border-gray-500">
                <h3 class="text-lg font-medium">Read the changelog</h3>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.75 8.75L14.25 12L10.75 15.25"></path>
                </svg>
            </div>
        </a>
        <a href="https://github.com/ryangjchandler/tinywind/issues/new?assignees=ryangjchandler&labels=component+request&template=component-request.md&title=" target="_blank" class="block">
            <div class="flex items-center justify-between px-6 py-4 border border-gray-300 rounded-md hover:border-gray-500">
                <h3 class="text-lg font-medium">Request a component</h3>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.75 8.75L14.25 12L10.75 15.25"></path>
                </svg>
            </div>
        </a>
    </section>
@endsection
