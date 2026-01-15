@extends("layouts.default")

@section('title', "East Anglia's Largest Developer Conference")

@section("content")
    <x-hero />

    <x-introduction />

    <x-expect />
    <x-testimonials />
    <x-gallery />

    <x-tickets />

    <div
        class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
    >
        <h4 class="mb-4 text-3xl font-black tracking-wide lg:mb-8 lg:text-6xl">
            The Schedule
        </h4>

        <div>
            <div class="rounded-lg bg-white px-4 py-2">
                <h4>
                    Coming Soon...
                    <a class="text-wave-purple underline" href="#newsletter">
                        Subscribe to our newsletter
                    </a>
                    to be the first to know when it's announced!
                </h4>
            </div>
        </div>
    </div>

    {{-- <x-schedule /> --}}

    <x-sponsors />
    <x-discord />
    <x-newsletter />
    <x-footer />
@endsection
