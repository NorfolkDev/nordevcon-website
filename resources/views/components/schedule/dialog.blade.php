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
            <div class="flex gap-4">
                <div>
                    @foreach ($session->speakers as $speaker)
                        <img
                            @class(["w-24 rounded-full border-2 border-slate-900", "-ml-20" => ! $loop->first])
                            alt="{{ $speaker->fullName }} is at nor(DEV): con 2024"
                            src="{{ $speaker->profilePictureUrl }}"
                        />
                    @endforeach
                </div>
                <div>
                    <h4 class="text-2xl font-bold tracking-tight">
                        {{ $session->speakers->map->fullName->join(", ") }}
                    </h4>
                </div>
            </div>
        </div>
    </form>
</dialog>
