@props(['route', 'title'])

@php
$active = request()->routeIs($route);
@endphp

<li @class([
    'px-3',
    'py-2',
    'rounded-sm',
    'mb-0.5',
    'last:mb-0',
    'bg-gray-800' => $active,
    'hover:bg-gray-800' => !$active,
]) class="">
    <a class="block text-gray-300 transition text-sm duration-150 hover:text-gray-200 active"
        href="{{ Route::has($route) ? route($route) : 'javascript:void(0)' }}"
        style="outline: currentcolor none medium;">
        <div class="flex flex-grow items-center">
            <div class="mr-3">
                {{ $icon }}
            </div>
            <span class="text-md font-medium">{{ $title }}</span>
        </div>
    </a>
</li>
