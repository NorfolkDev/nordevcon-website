@extends("layouts.page")

@section('title', "About Norfolk Developers aka. nor(DEV):")

@section("page")
    <div class="bg-gray-100">
        <div
            class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="text-center">
                <h1
                    class="text-4xl font-black tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                    About Us
                </h1>

                <h2 class="italic text-gray-500">
                    the nor(DEV): in nor(DEV): con
                </h2>

                <p
                    class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                >
                    We are more than just a conference. We are a community that
                    goes beyond the event and is dedicated to fostering growth,
                    learning, and connection in the East Anglian tech scene all
                    year round.
                </p>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden bg-white py-16">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-prose text-lg">
                <h2>
                    <span
                        class="block text-center text-base font-semibold uppercase tracking-wide text-wave-purple"
                    >
                        Our Story
                    </span>
                    <span
                        class="mt-2 block text-center text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                    >
                        A Passion for Tech & Community in Norfolk
                    </span>
                </h2>
                <p class="mt-8 text-xl leading-8 text-gray-500">
                    It all started with a simple idea. After experiencing the
                    vibrant developer meetups in London, our founder, Paul
                    Grenyer, saw a need for a similar hub in Norwich. There was
                    a clear appetite for tech in the city, but the community was
                    fragmented. The mission became clear: "to bring good quality
                    technical content to Norfolk" and create the networking
                    opportunities needed for a thriving local ecosystem.
                </p>
                <p class="mt-6 text-xl leading-8 text-gray-500">
                    From that first Sync Conf in 2013 to today, that mission has
                    grown but the core remains the same. We are a
                    not-for-profit, volunteer-run organization dedicated to
                    building up the tech community in Norfolk and beyond. We're
                    here to help graduates find internships, juniors land their
                    first roles, and seniors find their next challenge, all
                    within one supportive space.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Our Values in Action
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    We don't just talk about our values; we live them. Here's
                    how we put our community-first promise into practice.
                </p>
            </div>
            <div class="mt-10">
                <dl
                    class="space-y-10 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10 md:space-y-0"
                >
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-wave-purple text-white"
                            >
                                <svg
                                    class="h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9V3m0 18a9 9 0 009-9M3 12a9 9 0 019-9m-9 9a9 9 0 009 9m-9-9h18"
                                    />
                                </svg>
                            </div>
                            <p
                                class="ml-16 text-lg font-medium leading-6 text-gray-900"
                            >
                                Inclusivity & Accessibility
                            </p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">
                            We work hard to create a welcoming space for
                            everyone. In 2024 alone, we provided over 50 free
                            student tickets and 15
                            <a
                                href="/attend#scholarship"
                                class="text-wave-purple hover:underline"
                            >
                                scholarship tickets
                            </a>
                            to ensure that cost is never a barrier to learning
                            and connection.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-wave-purple text-white"
                            >
                                <svg
                                    class="h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"
                                    />
                                </svg>
                            </div>
                            <p
                                class="ml-16 text-lg font-medium leading-6 text-gray-900"
                            >
                                Radical Transparency
                            </p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">
                            We are a not-for-profit company. We publish a
                            detailed financial breakdown of our costs and income
                            after each conference. Any surplus is reinvested
                            directly into the community & events throughout the
                            year.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-wave-purple text-white"
                            >
                                <svg
                                    class="h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"
                                    />
                                </svg>
                            </div>
                            <p
                                class="ml-16 text-lg font-medium leading-6 text-gray-900"
                            >
                                Community Impact
                            </p>
                        </dt>
                        <dd class="ml-16 mt-2 text-base text-gray-500">
                            The caring spirit of our community is incredible. At
                            our 2024 conference, we raised £1,252 for The Feed,
                            a local foundation tackling poverty and homelessness
                            in Norwich.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-col items-center gap-16 md:flex-row md:items-start"
            >
                <div
                    class="flex w-full justify-center md:w-1/3 md:justify-start"
                >
                    <img
                        src="{{ Vite::asset("resources/img/mez-and-alex.jpg") }}"
                        alt="Mez and Alex, members of the organising team"
                        class="aspect-square h-auto w-full max-w-xs rounded-lg object-cover shadow-lg md:aspect-auto"
                    />
                </div>
                <div class="w-full md:w-2/3">
                    <div class="text-center md:text-left">
                        <h2
                            class="text-3xl font-extrabold text-gray-900 sm:text-4xl"
                        >
                            The Organising Team
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Norfolk Developers is powered by passion and a
                            desire to see the community thrive. We're a small
                            team of volunteers who dedicate time to nurturing
                            the community that has helped in their own growth.
                        </p>
                    </div>
                    <ul class="mt-10 space-y-10">
                        <li class="text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-900">
                                Alex Barfield
                            </h3>
                            <p class="mt-2 text-lg text-wave-purple">
                                Lead Organiser
                            </p>
                            <p class="mt-4 text-base text-gray-500">
                                As a freelance software developer, Alex found
                                connection & support in the community when
                                originally joining Norfolk Developers in 2014.
                                Determined to maintain this community passion he
                                was keen to step up and continue in Paul's
                                stead. Since 2019, Alex has been passionate
                                about creating a platform for developers to
                                share knowledge, learn new skills, and connect
                                with their peers.
                            </p>

                            <a
                                class="mt-8 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white hover:bg-wave-pink sm:w-auto"
                                href="http://linkedin.com/in/alexscotton/"
                            >
                                Connect with Alex on LinkedIn
                            </a>
                        </li>

                        <li class="text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-900">
                                Mary-Anne Barfield
                            </h3>
                            <p class="mt-2 text-lg text-wave-purple">
                                Co-Organiser
                            </p>
                            <p class="mt-4 text-base text-gray-500">
                                Mary-Anne is the heart of the nor(DEV):con
                                conference. She ensures the conference is a
                                welcoming and inclusive space for everyone.
                                Manages our Conference volunteers and she also
                                works to build strong relationships with our
                                sponsors and partners, who are essential to
                                making the event a success.
                            </p>

                            <a
                                class="mt-8 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white hover:bg-wave-pink sm:w-auto"
                                href="https://www.linkedin.com/in/mary-anne-barfield-68058623a/"
                            >
                                Connect with Mary-Anne on LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <x-gallery />

    <div class="bg-wave-purple">
        <div
            class="mx-auto max-w-2xl px-4 py-16 text-center sm:px-6 sm:py-20 lg:px-8"
        >
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Code of Conduct
            </h2>

            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Creating a safe, respectful, and inclusive environment is our
                highest priority. We expect all participants to adhere to our
                Code of Conduct.
            </p>

            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Be kind to others. Do not insult or put down other attenders.
                Behave professionally. Remember that any discriminatory (as in
                sexist, racist, etc.) or exclusionary jokes are not appropriate.
                Attendees violating these rules will be asked to leave the
                conference without a refund at the sole discretion of the
                conference organisers.
            </p>

            <a
                href="https://norfolkdevelopers.com/code-of-conduct"
                class="mt-8 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-wave-purple hover:bg-indigo-50 sm:w-auto"
            >
                Read the Full CoC
            </a>
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
