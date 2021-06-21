@php
$data = [
    ['name' => 'Ryan', 'age' => 21, 'location' => 'United Kingdom', 'contact' => 'support@ryangjchandler.co.uk'],
    ['name' => 'Dan', 'age' => 99, 'location' => 'United Kingdom', 'contact' => 'dan@test.com'],
    ['name' => 'Sam', 'age' => 45, 'location' => 'Czech Republic', 'contact' => 'sam@stillbuildinglean.com'],
    ['name' => 'John', 'age' => 180, 'location' => 'Mars', 'contact' => 'john@doe.co.uk'],
];
@endphp

<table class="w-full whitespace-no-wrap bg-white border border-gray-200 divide-y divide-gray-200 rounded-md table-auto divide">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-4 text-xs font-medium text-left text-gray-600 uppercase">Name</th>
            <th class="px-6 py-4 text-xs font-medium text-left text-gray-600 uppercase">Age</th>
            <th class="px-6 py-4 text-xs font-medium text-left text-gray-600 uppercase">Location</th>
            <th class="px-6 py-4 text-xs font-medium text-left text-gray-600 uppercase">Contact</th>
            <th class="px-6 py-3">
                <span class="sr-only">Actions</span>
            </th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($data as $row)
            <tr class="bg-white">
                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-no-wrap">{{ $row['name'] }}</td>
                <td class="px-6 py-4 text-sm text-gray-600 whitespace-no-wrap">{{ $row['age'] }}</td>
                <td class="px-6 py-4 text-sm text-gray-600 whitespace-no-wrap">{{ $row['location'] }}</td>
                <td class="px-6 py-4 text-sm text-gray-600 whitespace-no-wrap">
                    <a href="mailto:{{ $row['contact'] }}" class="underline">{{ $row['contact'] }}</a>
                </td>
                <td class="px-6 py-4 text-sm text-right whitespace-no-wrap">
                    <a href="#" class="font-medium text-blue-500 underline hover:text-blue-600 focus:text-blue-600">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>