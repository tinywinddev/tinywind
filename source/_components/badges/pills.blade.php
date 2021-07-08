@php
$colors = [
    'blue',
    'red',
    'green',
    'yellow',
    'indigo',
    'pink',
    'gray'
];
@endphp

<div class="space-x-4">
    @foreach($colors as $color)
        <span class="bg-{{ $color }}-300 text-{{ $color }}-900 inline-block text-center px-2 py-1 rounded-full text-sm font-semibold">
            Badge
        </span>
    @endforeach
</div>