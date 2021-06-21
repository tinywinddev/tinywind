@extends('_layouts.main')

@section('body')
    <div class="max-w-3xl">
        <div class="mb-4 prose">
            <h2>Stars</h2>
        </div>
        
        <div class="space-y-6">
            @foreach($page->components['Stars'] as $label => $view)
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
        </div>
    </div>
@endsection