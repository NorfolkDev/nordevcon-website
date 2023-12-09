@props([
    "entry",
])

<li class="group relative flex gap-x-4">
    <div
        class="absolute -bottom-8 left-0 top-0 flex w-8 justify-center group-last:h-8"
    >
        <div class="w-1 bg-wave-orange/50"></div>
    </div>
    <div
        class="relative flex h-8 w-8 flex-none items-center justify-center bg-gray-100"
    >
        <div
            class="h-6 w-6 rounded-full bg-wave-orange ring-2 ring-wave-orange/75"
        ></div>
    </div>
    <div class="flex-auto">
        <h4 class="font-black">{{ $entry->headline }}</h4>
        <time
            datetime="{{ $entry->datetime->toIso8601String() }}"
            class="mb-2 text-xs font-bold leading-5 text-slate-900"
        >
            {{ $entry->datetime->isoFormat("ddd, Do MMM h:mma") }}
        </time>
        <p class="font-condensed text-sm">
            {{ $entry->description }}
        </p>
    </div>
</li>
