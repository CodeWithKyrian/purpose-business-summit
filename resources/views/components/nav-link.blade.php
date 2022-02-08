@props(['route'])

@php
$classes = (request()->routeIs($route))
            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-800 focus:outline-none transition duration-150 ease-in-out uppercase'
            : 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase';
@endphp

<a href="{{ Route::has($route) ? route($route) : 'javascript::void(0)' }}" :class="{'!text-white' : atTop&&!open}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
