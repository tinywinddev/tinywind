<a {{ $attributes->merge([
    'class' => 'text-blue-500 hover:text-blue-800 focus:text-blue-800 hover:underline focus:underline'
]) }}>
    {{ $slot }}
</a>