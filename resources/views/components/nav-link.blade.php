@props(['href', 'active' => null])

@php
    $active = $active ?? request()->is(trim($href, '/'));
@endphp

<a 
    href="{{ $href }}" 
    @if($active) aria-current="page" @endif
    {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white')]) }}
>
    {{ $slot }}
</a>