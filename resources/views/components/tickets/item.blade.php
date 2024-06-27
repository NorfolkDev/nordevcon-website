@props([
    "title",
    "price",
    "rrp",
    "description",
    "features",
    "href",
])

<div class="flex-1 flex-grow bg-white px-6 py-8 sm:p-10 sm:pb-6">
    <div>
        <h3
            class="inline-flex rounded-full bg-indigo-100 px-4 py-1 text-sm font-semibold uppercase tracking-wide text-indigo-600"
        >
            {{ $title }}
        </h3>
    </div>
    <div class="mt-4 flex items-baseline text-4xl font-medium line-through">
        {{ $rrp }}
    </div>
    <div class="mt-1 flex items-baseline text-6xl font-extrabold">
        {{ $price }}
        <span class="ml-1 text-2xl font-medium text-gray-500">.00</span>
    </div>
    <p class="mt-5 text-lg text-gray-500">{{ $description }}</p>
</div>

<div
    class="flex flex-col justify-between space-y-6 bg-gray-50 px-6 pb-8 pt-6 sm:p-10 sm:pt-6"
>
    <ul class="space-y-4">
        @foreach ($features as $feature)
            <li class="flex items-start">
                <div class="flex-shrink-0">
                    <x-illustration.bulb />
                </div>
                <p class="ml-3 text-base text-gray-700">{{ $feature }}</p>
            </li>
        @endforeach
    </ul>

    <a
        href="{{ $href }}"
        class="mt-4 flex items-center justify-center rounded-md border border-transparent bg-wave-orange px-5 py-3 text-lg font-extrabold text-white ring-4 ring-wave-orange/75 transition-all hover:ring-8 lg:text-2xl"
    >
        Buy Now
    </a>
</div>
