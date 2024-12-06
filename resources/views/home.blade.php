@extends('layouts.default')

@section('title', "East Anglia's Largest Developer Conference")

@section('content')
    <x-hero />

    <x-introduction />

    <x-expect />
    <x-timeline />

    <div class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8" x-data="{ favourites: $persist([]) }">
        <h4 class="mb-4 text-3xl font-black tracking-wide lg:mb-8 lg:text-6xl">
            The Schedule
        </h4>

        <div>
            <div class="bg-white rounded-lg py-2 px-4">
                <h4>
                    Coming Soon...
                    <a class="underline text-wave-purple" href="#newsletter">Subscribe to our newsletter</a>
                    to be the first to know when it's announced!
                </h4>
            </div>
        </div>
    </div>

    <x-tickets />
    <x-workshops />
    <x-sponsors />
    <x-discord />
    <x-testimonials />
    <x-newsletter />
    <x-footer />
@endsection
