@props(['active' => false, 'href' => '#'])

@php
    $current = "bg-gray-900 text-white";
    $default = "text-gray-300 hover:bg-gray-700 hover:text-white";
    $classes = "rounded-md px-3 py-2 text-sm font-medium " . ($active ? $current : $default);
@endphp

<a href="{{ $href }}" 
   {{ $attributes->merge(['class' => $classes]) }}
   @if($active) aria-current="page" @endif>
    {{ $slot }}
</a>