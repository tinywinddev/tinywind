@extends('_layouts.main')

@section('body')
    <div class="max-w-3xl">
        <div class="mb-4 prose">
            <h2>Components</h2>
        </div>
        
        <div class="grid grid-cols-3 gap-x-4 gap-y-6">
            @foreach($page->components as $name => $components)
                <a href="@if(is_bool($components)) # @else /components/{{ \Illuminate\Support\Str::slug($name) }} @endif">
                    <div class="px-3 pt-2 space-y-2 border-2 border-gray-300 rounded hover:border-gray-500">
                        <h3 class="text-lg font-medium text-gray-900">{{ $name }}</h3>
                        <div class="-mx-3 bg-gray-50">
                            @if(is_bool($components))
                                <small class="inline-block px-3 pb-1 text-gray-500">Coming soon...</small>
                            @else
                                <small class="inline-block px-3 py-1 text-gray-500">{{ count($components) }} components</small>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection