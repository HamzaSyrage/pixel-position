@props(['name', 'label', 'value' => 1, 'checked' => false])

@php
    $default = [
        'type' => 'checkbox',
        'name' => $name,
        'id' => $name,
        'class' =>
            'form-checkbox h-5 w-5 rounded border-white/25 bg-white/10 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-gray-900',
        'value' => $value,
        'checked' => old($name, $checked) == $value,
    ];
@endphp

<div class="relative flex items-start">
    <div class="flex h-6 items-center">
        <input {{ $attributes->merge($default) }}>
    </div>
    <div class="ml-3 text-sm">
        <label for="{{ $name }}" class="font-medium text-gray-300">{{ $label }}</label>
    </div>
    @error($name)
        <span class="mt-2 block text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
