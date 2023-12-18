<div
    class="mx-auto my-12 flex w-full flex-col gap-8 px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:flex-row-reverse"
>
    <ul
        class="grid shrink-0 grid-cols-4 gap-4 xl:w-1/2 xl:grid-cols-[repeat(2,1fr)] xl:grid-rows-[repeat(2,max-content)]"
    >
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="aspect-square rounded object-cover"
                height="800px"
                width="800px"
                src="{{ Vite::asset("resources/img/timeline_1.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="aspect-square rounded object-cover"
                height="800px"
                width="800px"
                src="{{ Vite::asset("resources/img/timeline_2.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="aspect-square rounded object-cover"
                height="800px"
                width="800px"
                src="{{ Vite::asset("resources/img/timeline_3.jpg") }}"
            />
        </li>
        <li class="rounded-md bg-wave-purple p-2">
            <img
                class="aspect-square rounded object-cover"
                height="800px"
                width="800px"
                src="{{ Vite::asset("resources/img/timeline_4.jpg") }}"
            />
        </li>
    </ul>

    <div class="mx-auto w-full max-w-2xl text-slate-900 lg:max-w-none xl:w-1/2">
        <h4 class="mb-4 text-3xl font-black tracking-wide lg:text-6xl">
            What's the plan?
        </h4>

        <ol role="list" class="mt-6 space-y-6">
            @foreach ($timeline as $entry)
                <x-timeline.item :entry="$entry" />
            @endforeach
        </ol>
    </div>
</div>
