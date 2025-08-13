@extends("layouts.page")

@section('title', "The Conference - nor(DEV):con")

@section("page")
    <div class="bg-gray-100">
        <div
            class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="text-center">
                <h1
                    class="text-4xl font-black tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                    The Conference
                </h1>
                <p
                    class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                >
                    Three days of learning, networking, and fun. Get ready for a
                    deep-dive into the world of tech.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Workshops
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Get Hands-On
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our workshops are a chance to move beyond theory and get
                    your hands dirty. These 3-hour, practical sessions are
                    designed for practical skill-building in a small group
                    setting.
                </p>
            </div>
            {{-- Example Workshop Listing --}}
        </div>
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Speakers
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Learn from the Best
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our speakers are the heart of the conference. We hand-pick
                    practitioners, leaders, and innovators from around the world
                    and from our own backyard to share their real-world
                    expertise.
                </p>
                <div class="mt-6">
                    <a
                        href="/speak"
                        class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                    >
                        Learn more about speaking at nor(DEV): con
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Socials & Networking
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Connect with the Community
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    The conversation doesn't stop when the talks end. We have a
                    range of social events and networking opportunities to help
                    you connect with your fellow attendees.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    The Timeline
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    What's the plan?
                </p>
            </div>
            <x-timeline />
        </div>
    </div>

    <div class="bg-white py-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-discord />
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
