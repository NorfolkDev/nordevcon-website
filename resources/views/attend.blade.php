@extends("layouts.page")

@section('title', "Attend - nor(DEV):con")

@section("page")
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
                    vibes. Secure your spot at nor(DEV): con 2026.
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
                    Scholarship Program
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Accessible to All
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We firmly believe that everyone who wants to learn and
                    connect at nor(DEV): con should be able to. Our scholarship
                    program offers free or "pay what you want" tickets to
                    students, people who are unemployed or underemployed, and
                    anyone else for whom the ticket price would be a barrier.
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    You needn't apply, as we operate an honour scheme, just head
                    over to the ticket site and grab your's for £12. Look for
                    the scholarship ticket. If you feel you can pay more, you're
                    welcome to set your own price.
                </p>

                <div class="mt-6">
                    <a
                        href="{{ config("variables.ticket_url") }}"
                        class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                    >
                        Get your Scholarship Ticket
                    </a>
                </div>

                <p class="mt-4 max-w-2xl text-gray-500 lg:mx-auto">
                    <span class="font-bold">
                        Are you an educator? Want to bring your class?
                    </span>
                    We offer free group tickets to a selection of local schools
                    and colleges, (inc. Sir Isaac Sixth Form, Thorpe St Andrew,
                    NUA, Access to music and more.) want to join them?
                    <a href="mailto:conference@norfolkdevelopers.com">
                        Get in touch
                    </a>
                    and our team will help you register for the scheme (spaces
                    are limited.)
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
                    Consider Volunteering
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Be a Part of the Team
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Volunteering is a fantastic way to experience the conference
                    from a different perspective, meet new people, and
                    contribute to the community. We have a variety of roles
                    available, and we'd love for you to join us.
                </p>
                <div class="mt-6">
                    <a
                        href="/volunteer"
                        class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                    >
                        Learn More About Volunteering
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:text-center">
            <h2
                class="text-base font-semibold uppercase tracking-wide text-wave-purple"
            >
                The Venue
            </h2>
            <p
                class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
            >
                King's Conference Centre, Kings Street, Norwich
            </p>
        </div>

        <x-venue />
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Need some help?
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Convince Your Boss
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Need help getting your attendance approved? We've got you
                    covered. We've drafted a letter template that outlines the
                    key benefits of attending nor(DEV): con.
                </p>
                <div class="mt-6">
                    <a
                        href="#"
                        class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                    >
                        Download the Letter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-tickets />
    <x-newsletter />
    <x-footer />
@endsection
