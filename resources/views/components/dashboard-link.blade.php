@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex p-2 text-sm font-semibold leading-6 text-gray-700 rounded-md visited:bg-blue-500 visited:text-white bg-gray-50 group gap-x-3'
            : 'flex p-2 text-sm font-semibold leading-6 text-gray-700 rounded-md hover:text-indigo-600 hover:bg-gray-50 group gap-x-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
