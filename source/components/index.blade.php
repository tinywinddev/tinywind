@extends('_layouts.main')

@section('body')
    <div class="max-w-3xl">
        <div class="mb-4 prose">
            <h2>Components</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-6">
            @foreach($page->components as $name => $components)
                <a @if(!is_bool($components)) href="/components/{{ \Illuminate\Support\Str::slug($name) }}" @endif>
                    <div class="px-3 pt-2 space-y-2 border-2 border-gray-300 rounded @if(is_bool($components)) opacity-50 @else hover:border-gray-500 @endif">
                        <h3 class="text-lg font-medium text-gray-900">{{ $name }}</h3>
                        <div class="-mx-3 bg-gray-50">
                            @if(is_bool($components))
                                <p class="inline-block px-3 py-2 text-sm text-gray-500 md:text-base">Coming soon...</p>
                            @else
                                <p class="inline-block px-3 py-2 text-sm text-gray-500 md:text-base">{{ count($components) }} {{ \Illuminate\Support\Str::plural('component', count($components)) }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection