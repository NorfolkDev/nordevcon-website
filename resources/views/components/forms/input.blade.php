@props([
    'label',
    'name',
    'type' => 'text',
])

<div>
    <label
        for="{{ $name }}"
        class="text-md mb-2 block font-bold uppercase text-slate-200"
    >
        {{ $label }}
    </label>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        class="block w-full rounded-md border border-transparent px-5 py-3 text-base text-slate-900 placeholder-slate-500 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-600"
        
        {{ $attributes }}
    />

    @error($name)
        <p class="mt-2 text-wave-pink font-black">{{ $message }}</p>
    @enderror
</div>