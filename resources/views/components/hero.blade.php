<section
    class="relative flex min-h-[max(80vh,800px)] flex-col justify-between bg-slate-900"
>
    <div
        class="z-50 flex flex-col-reverse justify-between gap-4 p-8 px-16 pb-32 lg:flex-row lg:gap-8 lg:pb-36 lg:pl-32"
    >
        <div class="hidden lg:block"></div>
        <div class="flex flex-col items-end gap-8 text-white">
            <x-logo class="w-full max-w-sm lg:max-w-lg" />
            <p
                class="font-display bg-move inline bg-gradient-to-r from-wave-purple via-wave-pink to-wave-orange bg-clip-text text-right text-4xl font-extrabold leading-normal tracking-tight text-transparent lg:text-6xl"
            >
                {{ config("variables.date") }}
            </p>
            <x-navigation />

            <a
                href="{{ config("variables.ticket_url") }}"
                class="hover:ring-wave-orange-75 mt-4 w-full rounded bg-wave-orange px-4 py-2 text-center text-3xl font-black text-slate-900 ring-4 ring-wave-orange/50 transition-all hover:ring-8 md:w-auto lg:w-auto md:text-left"
            >
                Get your ticket!!
            </a>
        </div>
    </div>
</section>

<div class="sticky -top-[6vw] z-40 -mb-[6vw] -mt-[6vw]">
    <div
        class="absolute bottom-2/3 left-0 right-0 z-50 flex overflow-hidden lg:items-end lg:justify-end"
    >
        <div
            class="w-full min-w-[80rem] opacity-25 lg:max-w-3xl lg:opacity-100 xl:max-w-5xl 2xl:max-w-7xl"
        >
            <x-illustration.city />
        </div>
    </div>

    <x-wave />

    <img
        class="absolute bottom-1/2 z-50 max-w-[50vw] lg:max-w-[30vw]"
        width="400"
        height="363"
        src="{{ Vite::asset("resources/img/poster-crab.png") }}"
    />
</div>
