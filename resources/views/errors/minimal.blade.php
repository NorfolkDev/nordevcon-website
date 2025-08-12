@extends("layouts.default")

@section('title', "About Norfolk Developers aka. nor(DEV):")

@section("content")
    <div
        class="relative grid h-dvh flex-col items-center justify-center bg-gray-50 px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0"
    >
        <div
            class="hidden h-full flex-col justify-center bg-wave-purple p-10 text-white lg:flex"
        >
            <div class="flex flex-grow flex-col justify-end">
                <h1 class="text-7xl font-black text-wave-orange">
                    @yield("code")
                </h1>
                <h2 class="text-5xl font-black text-wave-orange/80">
                    @yield("title")
                </h2>
            </div>

            <div class="flex flex-grow flex-col justify-end">
                <img
                    width="400"
                    height="363"
                    src="{{ Vite::asset("resources/img/poster-crab.png") }}"
                />
            </div>
        </div>

        <div class="max-h-full w-full overflow-scroll lg:p-8">
            <div class="flex flex-col gap-6 sm:w-96">
                <h2 class="text-xl text-cyan-800">
                    @yield("code")
                    &mdash;
                    @yield("title")
                </h2>

                <h2 class="text-xl text-cyan-800">
                    @yield("message")
                </h2>
            </div>
        </div>
    </div>
@endsection
