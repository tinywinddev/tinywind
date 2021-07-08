@php
$rows = [
    'Website' => 'Operational',
    'Source control' => 'Operational',
    'Documentation' => 'Operational',
    'API' => 'Operational',
];
@endphp

<ul class="max-w-md border border-gray-300 divide-y divide-gray-300 rounded shadow-sm">
    @foreach($rows as $text => $status)
        <li class="flex items-center justify-between p-4 text-sm">
            <p class="font-semibold">{{ $text }}</p>
            <p class="text-green-600">{{ $status }}</p>
        </li>
    @endforeach
</ul>