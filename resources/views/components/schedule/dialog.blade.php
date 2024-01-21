@props([
    "session",
])

<dialog
    class="w-full bg-transparent p-0 backdrop:bg-black backdrop:bg-opacity-50"
>
    <form
        class="mx-auto max-w-7xl overflow-hidden rounded-md bg-wave-pink text-white shadow-md"
        method="dialog"
    >
        <header class="flex justify-end p-4">
            <div class="flex-1">
                <h2 class="text-lg font-bold lg:text-2xl">
                    {{ $session->title }}
                </h2>
            </div>
            <div>
                <button
                    type="submit"
                    aria-label="close"
                    formmethod="dialog"
                    formnovalidate
                    class="font-bold"
                >
                    X
                </button>
            </div>
        </header>
        <div class="bg-white p-4 text-slate-900">
            <p class="mb-2">
                {{ $session->description }}
            </p>
        </div>

        <div class="bg-slate-300 p-4 text-slate-900">
            <div class="mb-4">
                <p class="text-xl">
                    In the {{ $session->room }} on
                    {{ $session->startsAt->isoFormat("ddd, Do MMM h:mma") }}
                </p>
            </div>
            <div class="group flex gap-4">
                <div class="-space-x-12 group-hover:space-x-2">
                    @foreach ($session->speakers as $speaker)
                        <img
                            class="inline-block w-24 rounded-full border-2 border-slate-900 transition-all ease-in-out"
                            alt="{{ $speaker->fullName }} is at nor(DEV): con 2024"
                            src="{{ $speaker->profilePictureUrl }}"
                        />
                    @endforeach
                </div>
                <div>
                    @foreach ($session->speakers as $speaker)
                        <h4 class="text-2xl font-bold tracking-tight">
                            {{ $speaker->fullName }}
                            <span
                                class="inline-block -translate-x-1/2 text-sm uppercase text-gray-700 opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100"
                            >
                                {{ $speaker->tagline }}
                            </span>
                        </h4>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
</dialog>
