@props([
    'align' => 'left',
    'image',
    'headline',
    'date',
    'description',
    'label',
])

<li @class([
    'grow-1 relative max-w-3xl shrink-0 overflow-hidden rounded-xl bg-wave-purple',
    'text-right xl:self-end' => $align === 'right',
])>
    <img class="object-cover mix-blend-multiply" height="675px" width="1200px" src="{{ $image }}" />
    <div class="absolute inset-0 flex flex-col justify-between p-4 text-white sm:p-6 lg:p-8">
        <div>
            <h3 class="text-2xl font-black lg:mb-2 lg:text-5xl">
                {{ $headline }}
            </h3>
            <p class="font-condensed font-black text-gray-400">
                {{ $date }}
            </p>
            <p class="mt-4 lg:text-xl">{{ $description }}</p>
        </div>
        <div>
            <a href="https://ti.to/norfolkdevelopers/nordevcon-25/discount/workshop-group"
                class="hover:ring-wave-orange-75 mt-4 inline-block rounded bg-wave-orange px-4 py-2 text-xl font-black text-slate-900 ring-4 ring-wave-orange/50 transition-all hover:ring-8 lg:text-2xl">
                {{ $label }}
            </a>
        </div>
    </div>
</li>
