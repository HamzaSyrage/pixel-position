@props(['small' => false])
@php
    $classes = 'bg-white/10  py-1 px-2 rounded-xl hover:bg-white/15 transition-colors duration-100';
    if ($small) {
        $classes .= ' text-xs';
    } else {
        $classes .= ' text-xl';
    }
@endphp
<a href="tag/{{ $slot }}" class="{{ $classes }}">{{ $slot }}
</a>
