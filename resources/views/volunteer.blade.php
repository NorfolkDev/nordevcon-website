@extends("layouts.page")

@section('title', "Volunteer at nor(DEV):con")

@section("page")
    <div class="bg-gray-50">
        <div
            class="relative mx-auto py-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="text-center">
                <h1
                    class="text-4xl font-black tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                    Volunteer at nor(DEV):con
                </h1>
                <p
                    class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                >
                    Join the team and help make our conference an unforgettable experience for everyone.
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
                    Join Our Team
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Be a Part of the Community
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    nor(DEV):con relies on the hard work and dedication of volunteers. Without their tireless efforts and unwavering dedication, bringing this event to life would not be possible. We are deeply grateful for the vital role volunteers play in ensuring the success of our conference.
                </p>
            </div>
            <div class="mt-10">
                <img
                    src="{{ Vite::asset("resources/img/volunteer-team.jpg") }}"
                    class="mx-auto rounded-lg shadow-xl"
                    alt="The volunteer team at nor(DEV):con"
                />
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Volunteer Roles
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Find Your Fit
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We have a variety of roles available, each with its own set of responsibilities. Find the one that best suits your skills and interests.
                </p>
            </div>

            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-1a6 6 0 00-5.196-5.983" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Reception/Check-In</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Greet delegates and check them in.</li>
                                    <li>Coordinate the queue and swag bag collection.</li>
                                    <li>Answer general questions.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.125-1.273-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.125-1.273.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Room Host</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Introduce speakers.</li>
                                    <li>Ensure talks start and end on time.</li>
                                    <li>Assist delegates and keep the room tidy.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Room AV</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Start and stop recordings.</li>
                                    <li>Help speakers with projectors and other AV needs.</li>
                                    <li>Report any issues to the AV Lead.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">General Support</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Guide delegates to the right rooms.</li>
                                    <li>Keep access points clear.</li>
                                    <li>Fill in for other volunteers during breaks.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Merch Stand</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Run the merch stand and handle sales.</li>
                                    <li>Hand out pre-ordered merch.</li>
                                    <li>Keep the display organised.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root rounded-lg bg-white px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center rounded-md bg-wave-purple p-3 shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" /></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Raffle Stand</h3>
                                <ul class="mt-5 list-disc space-y-2 pl-5 text-base text-gray-500">
                                    <li>Run the raffle stand and handle sales.</li>
                                    <li>Hand out raffle tickets.</li>
                                    <li>Generate interest in the raffle.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-24">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Volunteer Applications Have Now Closed
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Thank you for your interest in volunteering. Applications for this year's conference are now closed.
                </p>
                <div class="mt-6">
                    <a href="#newsletter" class="inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white hover:bg-wave-pink">
                        Subscribe to our newsletter for future updates
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
