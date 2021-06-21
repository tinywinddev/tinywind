@extends('_layouts.main')

@section('body')
    <div class="space-y-8">
        @foreach($page->components as $name => $components)
            <section id="{{ \Illuminate\Support\Str::lower($name) }}" class="space-y-8">
                <div class="flex items-center space-x-2">
                    <h2 class="text-2xl font-medium text-gray-700">{{ $name }}</h2>
                    <a class="text-2xl text-blue-500 hover:text-blue-700 hover:underline focus:text-blue-700 focus:underline" href="#{{ \Illuminate\Support\Str::lower($name) }}">#</a>
                </div>
                
                <div class="space-y-8">
                    @if(is_bool($components) && !$components)
                        <h3 class="text-lg font-medium">Coming soon...</h3>
                    @else
                        @foreach($components as $label => $view)
                            <div class="space-y-2">
                                <div class="flex items-center justify-between space-x-4">
                                    <h3 class="text-lg font-medium">{{ $label }}</h3>
                                    <x-link href="https://github.com/ryangjchandler/tinywind/tree/main/source/_components/{{ str_replace('.', '/', $view) }}.blade.php" class="text-sm font-bold uppercase">
                                        View source
                                    </x-link>
                                </div>
                                @include('_components.' . $view)
                            </div>
                        @endforeach
                    @endif
                </div>
            </section>
        @endforeach
    </div>
@endsection
