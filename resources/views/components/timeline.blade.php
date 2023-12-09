<div
    class="mx-auto my-12 flex w-full flex-col gap-8 px-4 sm:px-6 lg:max-w-7xl lg:flex-row lg:px-8"
>
    <div class="mx-auto w-full max-w-2xl text-slate-900 lg:max-w-none">
        <h4 class="mb-4 text-5xl font-black tracking-wide lg:text-6xl">
            What's the plan?
        </h4>

        <ol role="list" class="mt-6 space-y-6">
            @foreach ($timeline as $entry)
                <x-timeline.item :entry="$entry" />
            @endforeach
        </ol>
    </div>

    <ul class="grid grid-cols-4 gap-4 lg:grid-cols-2">
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="h-full w-full rounded object-cover"
                src="{{ Vite::asset("resources/img/timeline_1.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="h-full w-full rounded object-cover"
                src="{{ Vite::asset("resources/img/timeline_2.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="h-full w-full rounded object-cover"
                src="{{ Vite::asset("resources/img/timeline_3.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="h-full w-full rounded object-cover"
                src="{{ Vite::asset("resources/img/timeline_4.jpg") }}"
            />
        </li>
    </ul>
</div>
