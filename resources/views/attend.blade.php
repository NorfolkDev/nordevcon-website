@extends("layouts.page")

@section('title', "Attend - nor(DEV):con")

@section("content")
    <div class="bg-gray-100">
        <div
            class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="text-center">
                <h1
                    class="text-4xl font-black tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                    Attend
                </h1>
                <p
                    class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                >
                    Join us for three days of learning, connection, and good
                    vibes. Secure your spot at nordevcon 2026.
                </p>
            </div>
        </div>
    </div>

    <!-- Tickets and Pricing Section -->
    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Tickets & Pricing
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    We've designed our tickets to be as clear and flexible as
                    possible.
                </p>
            </div>
            {{-- A clear comparison table --}}
            <div class="mt-10 text-center">
                <p class="text-base text-gray-500">
                    <strong>A Note on Our "Commercial Ticket" Policy:</strong>
                    To keep nordevcon accessible, our standard ticket prices are
                    heavily subsidised for individuals. If your ticket is being
                    paid for by a company with more than 5 employees, we ask
                    that you purchase a "Commercial Ticket" at a higher price
                    point. This support is vital for us to continue offering
                    affordable prices and scholarships to the community.
                </p>
            </div>
        </div>
    </div>

    <!-- Scholarship Program Section -->
    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Scholarship Program
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Accessible to All
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We firmly believe that everyone who wants to learn and
                    connect at nordevcon should be able to. Our scholarship
                    program offers free or "pay what you want" tickets to
                    students, people who are unemployed or underemployed, and
                    anyone else for whom the ticket price would be a barrier.
                </p>
                <div class="mt-6">
                    <a
                        href="#"
                        class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                    >
                        Apply for a Scholarship
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Venue and Travel Section -->
    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Venue & Travel
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    The King's Centre, Norwich
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    The King's Centre is conveniently located in the heart of
                    Norwich, a short walk from the train station and major bus
                    routes. The venue is fully accessible.
                </p>
                {{-- Embedded Google Map --}}
            </div>
        </div>
    </div>

    <!-- Convince Your Boss Section -->
    <div class="bg-gray-50">
        <div class="mx-auto max-w-4xl px-4 py-16 sm:px-6 lg:px-8">
            <div
                class="overflow-hidden rounded-lg bg-white shadow-xl lg:grid lg:grid-cols-2 lg:gap-4"
            >
                <div
                    class="px-6 pb-12 pt-10 sm:px-16 sm:pt-16 lg:py-16 lg:pr-0 xl:px-20 xl:py-20"
                >
                    <div class="lg:self-center">
                        <h2
                            class="text-3xl font-extrabold text-gray-900 sm:text-4xl"
                        >
                            <span class="block">Convince Your Boss</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-gray-500">
                            Need help getting your attendance approved? We've
                            got you covered. We've drafted a letter template
                            that outlines the key benefits of attending
                            nordevcon.
                        </p>
                        <a
                            href="#"
                            class="hover:bg-wave-purple-dark mt-8 inline-flex items-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white shadow"
                        >
                            Download the Letter
                        </a>
                    </div>
                </div>
                <div
                    class="aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1 -mt-6"
                >
                    <img
                        class="translate-x-6 translate-y-6 transform rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20"
                        src="{{ Vite::asset("resources/img/audience-bag.jpg") }}"
                        alt="App screenshot"
                    />
                </div>
            </div>
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
