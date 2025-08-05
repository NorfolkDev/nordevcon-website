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

    <!-- Event Structure Section -->
    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Event Structure
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Here's what you can expect from nor(DEV): con 2026.
                </p>
            </div>
            <div class="mt-10 grid gap-10 sm:grid-cols-1 md:grid-cols-3">
                <div class="rounded-lg border border-gray-200 p-8 text-center">
                    <h3 class="text-xl font-bold">Day 1: Workshop Day</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Deep-dive, hands-on learning with expert instructors.
                    </p>
                </div>
                <div class="rounded-lg border border-gray-200 p-8 text-center">
                    <h3 class="text-xl font-bold">Day 2: Conference Day 1</h3>
                    <p class="mt-2 text-base text-gray-500">
                        A full day of talks across multiple tracks, plus our
                        opening keynote.
                    </p>
                </div>
                <div class="rounded-lg border border-gray-200 p-8 text-center">
                    <h3 class="text-xl font-bold">Day 3: Conference Day 2</h3>
                    <p class="mt-2 text-base text-gray-500">
                        More talks, panels, and our closing keynote.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Workshops Section -->
    <div class="bg-gray-50 py-20">
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

    <!-- Speakers Section -->
    <div class="bg-white py-20">
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
            </div>
            {{-- Full, filterable gallery of all speaker profiles would be displayed here. --}}
        </div>
    </div>

    <!-- Schedule Section -->
    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Full Schedule
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Coming Soon! Follow us on social media for the latest
                    updates.
                </p>
                {{-- Placeholder for the detailed, filterable schedule grid. --}}
            </div>
        </div>
    </div>

    <!-- Socials and Networking -->
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

    <x-newsletter />
    <x-footer />
@endsection
