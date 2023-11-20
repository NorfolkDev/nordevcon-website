<section
    class="flex min-h-[100dvh] flex-col justify-between overflow-hidden bg-slate-900"
>
    <div
        class="pointer-events-none z-10 flex select-none flex-col gap-8 p-4 py-16 md:mb-16 md:p-16 md:pt-32"
    >
        <div class="max-w-sm text-white md:max-w-lg">
            <x-logo />
        </div>
        <div>
            <p
                class="font-display bg-move inline bg-gradient-to-r from-wave-purple via-wave-pink to-wave-orange bg-clip-text text-5xl font-extrabold leading-normal tracking-tight text-transparent"
            >
                {{ config("variables.title") }}
            </p>
        </div>
        <div>
            <p class="text-4xl font-extrabold tracking-tight text-white">
                {{ config("variables.date") }}
            </p>
        </div>
    </div>
</section>
