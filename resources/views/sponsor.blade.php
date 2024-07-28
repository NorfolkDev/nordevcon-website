@extends("layouts.default")

@section('title', "Sponsor nor(DEV):con")

@section("content")
    <div class="mx-auto max-w-7xl px-4 py-12">
        <h2 class="mb-8 text-3xl font-bold tracking-tight text-gray-900">
            Sponsor nor(DEV):con
        </h2>
        <p class="mb-2 text-2xl text-slate-900">
            Support and Connect with the Tech Community
        </p>
        <p class="text-xl text-slate-500">
            nor(DEV):con is a not-for-profit event dedicated to fostering
            innovation and collaboration within the tech community. Our mission
            is to keep delegate costs low, ensuring accessibility for all. To
            achieve this, we rely on the generous support of sponsors.
        </p>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="space-y-12">
            <ul
                class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8"
            >
                <li>
                    <div class="aspect-w-3 aspect-h-2">
                        <img
                            class="rounded-lg object-cover shadow-lg"
                            src="{{ Vite::asset("resources/img/sponsor_gallery_1.jpg") }}"
                        />
                    </div>
                </li>
                <li>
                    <div class="aspect-w-3 aspect-h-2">
                        <img
                            class="rounded-lg object-cover shadow-lg"
                            src="{{ Vite::asset("resources/img/sponsor_gallery_2.jpg") }}"
                        />
                    </div>
                </li>
                <li>
                    <div class="aspect-w-3 aspect-h-2">
                        <img
                            class="rounded-lg object-cover shadow-lg"
                            src="{{ Vite::asset("resources/img/sponsor_gallery_3.jpg") }}"
                        />
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4">
                <div class="grid gap-4 lg:grid-cols-12">
                    <div class="lg:col-span-4">
                        <h2
                            class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl"
                        >
                            Contact Us
                        </h2>
                        <p
                            class="mx-auto mt-3 max-w-4xl text-xl text-slate-700 sm:mt-5 sm:text-2xl"
                        >
                            Get in touch and let's talk about a conference
                            sponsorship.
                        </p>
                    </div>

                    <form
                        method="POST"
                        class="grid gap-4 overflow-hidden rounded-lg bg-slate-900 p-4 lg:col-span-8 lg:grid-cols-12 lg:gap-8 lg:p-8"
                    >
                        @csrf

                        @if ($errors->any())
                            <ul class="col-span-12 list-disc text-wave-pink">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="col-span-6">
                            <x-forms.input
                                label="First name"
                                name="firstname"
                                required
                            />
                        </div>
                        <div class="col-span-6">
                            <x-forms.input
                                label="Last name"
                                name="lastname"
                                required
                            />
                        </div>

                        <div class="col-span-12">
                            <x-forms.input
                                label="Phone number"
                                name="phone"
                                required
                            />
                        </div>

                        <div class="col-span-12">
                            <x-forms.input
                                label="Email address"
                                name="email"
                                type="email"
                                required
                            />
                        </div>

                        <div class="col-span-12 flex justify-end">
                            <button
                                type="submit"
                                class="flex rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-bold text-white shadow focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-600 sm:px-10"
                            >
                                Complete application
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    aria-hidden="true"
                                    class="ml-4 h-6 w-6"
                                >
                                    <path
                                        d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

    <div class="py-12">
        <div class="relative py-24">
            <div
                class="bg-move absolute inset-y-0 left-0 w-1/2 rounded-r-3xl bg-gradient-to-br from-wave-purple via-wave-pink to-wave-orange"
            ></div>
            <div class="relative mx-auto max-w-7xl px-4">
                <div class="rounded-lg bg-gray-900">
                    <div class="px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
                        <div class="mb-6 text-center">
                            <h2
                                class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl"
                            >
                                Sponsorship Packages
                            </h2>
                            <p
                                class="mx-auto mt-3 max-w-4xl text-xl text-gray-300 sm:mt-5 sm:text-2xl"
                            >
                                Your chance to be involved in Norfolk Developers
                                Conference 2025.
                            </p>
                        </div>

                        <div class="grid gap-12 lg:grid-cols-12">
                            <div
                                class="grid gap-4 lg:col-span-8 lg:grid-cols-2"
                            >
                                <div class="flex overflow-hidden rounded-lg">
                                    <x-package
                                        title="Elite"
                                        :features="[
                                            '30 minute speaking slot, may be of a sales/marketing nature on the Friday',
                                            'Double sized exhibition space in the main auditorium',
                                            'Six conference tickets +20% discounts on further tickets',
                                            'Two pop-up banners on main stage',
                                            'Prominent full page advert in the programme',
                                            'Prominent article in the programme',
                                            'Article on the nor.dev website',
                                            'Logo on conference lanyards',
                                            'Logo on the nor.dev/con website',
                                            'Logo in opening presentation',
                                            'Mentions on our social media',
                                            'Discord privileges',
                                            ]"
                                    />
                                </div>
                                <div class="flex overflow-hidden rounded-lg">
                                    <x-package
                                        title="Partner"
                                        price="4,000"
                                        :features="[
                                            'Exhibition space in the main auditorium',
                                            'Four conference tickets +20% discounts on further tickets',
                                            'Full page advert in the programme',
                                            'Article on the nor.dev website',
                                            'Logo on the nor.dev/con website',
                                            'Logo in opening presentation',
                                            'Mentions on our social media',
                                            'Discord privileges',
                                            ]"
                                    />
                                </div>
                            </div>
                            <div
                                class="flex overflow-hidden rounded-lg lg:col-span-4"
                            >
                                <x-package
                                    title="Associate"
                                    price="500"
                                    :features="[
                                        'One conference ticket +20% discounts on further tickets',
                                        'Logo on the nor.dev/con website',
                                        'Logo in opening presentation',
                                        'Logo in the programme',
                                        'Mentions on our social media',
                                        ]"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl px-4">
            <div class="rounded-lg bg-gray-900">
                <div class="px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
                    <div class="grid gap-4 lg:grid-cols-12">
                        <div class="lg:col-span-4">
                            <h2
                                class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl"
                            >
                                Food/Drink Sponsorship Packages
                            </h2>
                        </div>
                        <div class="lg:col-span-4">
                            <div class="flex overflow-hidden rounded-lg">
                                <x-package
                                    title="Refreshment Sponsorship"
                                    price="1,400"
                                    :features="[
                                        '2 x A4 banners on tea and coffee station',
                                        '2 x A4 banners on lunch tables',
                                        'Provide branded reusable cups',
                                        'One conference ticket +20% discounts on further tickets',
                                        'Logo on the nor.dev/con website',
                                        'Logo in opening presentation',
                                        'Logo in the programme',
                                        'Mentions on our social media',
                                        ]"
                                />
                            </div>
                        </div>
                        <div class="lg:col-span-4">
                            <div class="flex overflow-hidden rounded-lg">
                                <x-package
                                    title="Conference Dinner"
                                    price="3,300"
                                    :features="[
                                        'Five minute introduction before dinner',
                                        'Two conference tickets, with dinner (+20% discounts on further tickets)',
                                        'Space for two small banners at entrance',
                                        'Logo on place cards',
                                        'Space for two small banners at entrance',
                                        'Logo on the nor.dev/con website',
                                        'Logo in opening presentation',
                                        'Logo in the programme',
                                        'Mentions on our social media',
                                        ]"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
@endsection
