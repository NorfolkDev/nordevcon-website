@extends("layouts.default")

@section('title', "Your Personal Schedule | East Anglia's Largest Developer Conference")

@section("content")
    <section class="space-y-4 px-4 py-12 lg:px-12 lg:py-24">
        <h4 class="text-3xl font-black tracking-wide lg:text-6xl">
            Your Schedule
        </h4>

        <x-schedule.legend />

        <ol class="space-y-4">
            @foreach ($sessions as $session)
                <li class="{{ $session->theme }} border-l-8 p-2">
                    <h3>
                        {{ $session->startsAt->isoFormat("ddd, Do MMM h:mma") }}
                    </h3>
                    <h2 class="text-left font-bold leading-none">
                        {{ $session->title }}
                    </h2>

                    <ul>
                        {{ $session->speakers->pluck("fullName")->join(", ") }}
                    </ul>
                </li>
            @endforeach
        </ol>
    </section>
@endsection
