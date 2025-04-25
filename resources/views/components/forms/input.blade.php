@props(['name', 'label'])
@php
    $deafult = [
        'name' => $name,
        'id' => $name,
        'label' => $label,
        'class' => 'bg-white/10 border-white/25 outline-none rounded-xl px-5 py-4 w-full',
        'value' => request()->old($name),
        'required' => true,
    ];
@endphp
<div>
    <label for="{{ $name }}" class="">
        <x-heading>
            {{ $label }}
        </x-heading></label>
    <input {{ $attributes($deafult) }}>
    @error($name)
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
