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
                    In the {{ $session->room }} on {{ $session->startsAt }}
                </p>
            </div>
            <div class="flex gap-4">
                <div>
                    <img
                        class="w-24 rounded-full border-4 border-slate-900"
                        alt="Alex Kearns is at nor(DEV): con 2023"
                        src="https://norfolkdevelopers.s3.eu-west-2.amazonaws.com/nordevcon-website/2023/img/speaker_alex-kearns.jpg"
                    />
                </div>
                <div>
                    <h4 class="text-2xl font-bold tracking-tight"></h4>
                </div>
            </div>
        </div>
    </form>
</dialog>
