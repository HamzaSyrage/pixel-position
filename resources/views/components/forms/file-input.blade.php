@props(['name', 'label', 'accept' => null])

@php
    $default = [
        'type' => 'file',
        'name' => $name,
        'id' => $name,
        'class' =>
            'bg-white/10 border-white/25 outline-none rounded-xl px-5 py-4 w-full block cursor-pointer border text-sm text-gray-400 file:mr-4 file:cursor-pointer file:rounded-lg file:border-0 file:bg-indigo-600 file:px-4 file:py-2 file:text-white hover:file:bg-indigo-700',
        'accept' => $accept,
    ];
@endphp

<div class="mb-5">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-300 mb-2">
        <x-heading>
            {{ $label }}
        </x-heading>
    </label>

    <input {{ $attributes->merge($default) }}>
    @error($name)
        <span class="mt-2 block text-sm text-red-600">{{ $message }}</span>
    @enderror

    @if ($attributes->has('preview') && $attributes->get('preview'))
        <div class="mt-4" x-data="{ imagePreview: '{{ $attributes->get('preview') }}' }">
            <template x-if="imagePreview">
                <img :src="imagePreview" class="mt-2 h-32 rounded-lg object-cover">
            </template>
        </div>
    @endif
</div>
