@extends("layouts.page")

@section('title', "Sponsor nor(DEV):con")

@section("page")
    <div
        class="mx-auto my-12 max-w-7xl space-y-6 px-4 text-4xl font-extrabold uppercase leading-tight tracking-wide text-wave-purple lg:space-y-16 lg:text-7xl"
    >
        <p>
            It's not just about clocking up the
            <span class="text-wave-pink">CPD.</span>
        </p>

        <p>
            It's the memories, the
            <span class="text-wave-orange">connections,</span>
            the customers, the community and the
            <span class="text-wave-orange">friends</span>
            we make on the way.
        </p>

        <h1>
            Be a
            <span class="text-wave-pink">part</span>
            of
            <span class="text-wave-orange">nor(DEV): con</span>
            <br />
            2026.
        </h1>
    </div>

    <div class="mx-auto my-12 max-w-7xl px-4">
        <ul class="grid grid-cols-3 gap-x-6 gap-y-12 lg:grid-cols-3">
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

    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl space-y-4 px-4">
            <h2
                class="mb-6 text-4xl tracking-wide text-wave-purple lg:mb-12 lg:text-7xl"
            >
                Sponsorship benefits
            </h2>

            <p>
                Partnering with nor(DEV):con, is more than just a sponsorship;
                you're supporting East Anglia's vibrant and engaged technology
                community. We've designed our packages to create genuine
                connections and provide lasting value long after the conference
                ends. Here's what you can expect:
            </p>

            <ol class="ml-4 list-disc space-y-2 text-wave-orange">
                <li>
                    <h3 class="mb-2 font-semibold">Prime exhibition space</h3>
                    <p class="text-slate-900">
                        Located in the main hub of the conference; the central
                        meeting point for registration, coffee, and lunch. This
                        isn't a forgotten side room; you are front and centre!
                        This is where the celebrated "Corridor Conference"
                        happens, offering unparalleled opportunities for
                        spontaneous conversations and genuine networking.
                    </p>
                </li>
                <li>
                    <h3 class="mb-2 font-semibold">Full delegate access</h3>
                    <p class="text-slate-900">
                        The tickets included in your package are full conference
                        tickets. We encourage your team to step away from the
                        booth, attend talks, and attend the conference socials.
                    </p>
                </li>
                <li>
                    <h3 class="mb-2 font-semibold">Share your expertise</h3>
                    <p class="text-slate-900">
                        Dedicated speaking slots on our curated tracks. This is
                        your opportunity to establish your company as a thought
                        leader, sharing your expertise directly with an engaged
                        audience eager to learn. We also offer on-stage
                        opportunities for prize announcements, putting a
                        spotlight on your brand.
                    </p>
                </li>
                <li>
                    <h3 class="mb-2 font-semibold">The Programme & Swag Bag</h3>
                    <p class="text-slate-900">
                        The programme is a key guide for the event and a
                        valuable take-home asset. Your advertisements inside
                        ensures your message is seen multiple times by a captive
                        audience. Beyond the programme, you're welcome to add
                        your own leaflets, stickers, & branded merchandise, or
                        even sweet treats to the bags.
                    </p>
                </li>
                <li>
                    <h3 class="mb-2 font-semibold">
                        A conversation that doesn't stop
                    </h3>
                    <p class="text-slate-900">
                        Your connection with our community doesn't end with the
                        conference. Your team will receive an exclusive,
                        year-round role in our highly active Discord server.
                        This includes the ability to post in announcement
                        channels, ensuring your message reaches our members
                        throughout the year and keeps the conversation going.
                    </p>
                </li>
            </ol>
        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto grid max-w-7xl grid-cols-4 gap-6 px-4">
            <div class="col-span-4 lg:col-span-3">
                <h2
                    class="mb-6 text-4xl tracking-wide text-wave-purple lg:mb-12 lg:text-7xl"
                >
                    Partner with a trusted community-first event
                </h2>

                <p>
                    Sponsoring nor(DEV): con offers more than brand visibility;
                    As a sponsor, you are aligning with a trusted,
                    not-for-profit organisation celebrated for its values of
                    inclusivity & accessibility. This is a powerful statement to
                    the community, showing your commitment to nurturing the tech
                    ecosystem.
                </p>
            </div>

            <ol
                class="col-span-4 flex gap-2 lg:col-span-1 lg:row-span-2 lg:flex-col"
            >
                <li>
                    <img
                        class="rounded-lg object-cover lg:aspect-square"
                        src="{{ Vite::asset("resources/img/sponsor_community_1.jpg") }}"
                    />
                </li>
                <li>
                    <img
                        class="rounded-lg object-cover lg:aspect-square"
                        src="{{ Vite::asset("resources/img/sponsor_community_2.jpg") }}"
                    />
                </li>
                <li>
                    <img
                        class="rounded-lg object-cover lg:aspect-square"
                        src="{{ Vite::asset("resources/img/sponsor_community_3.jpg") }}"
                    />
                </li>
            </ol>

            <div class="col-span-4 lg:col-span-3">
                <h2
                    class="mb-6 text-2xl tracking-wide text-wave-purple lg:text-4xl"
                >
                    Our commitment to Inclusivity &amp; Accessibility
                </h2>

                <p class="mb-4">
                    Our core mission is to remove barriers to participation.
                    This is a promise we keep through concrete actions:
                </p>

                <ol class="ml-4 list-disc space-y-2 text-wave-orange">
                    <li>
                        <h3 class="mb-2 font-semibold">
                            Scholarship Programme
                        </h3>
                        <p class="text-slate-900">
                            Our comprehensive scholarship program offered to
                            students & the (un)der-employed, that in 2025,
                            enabled dozens of attendees that would not have had
                            the opportunity otherwise. Your sponsorship funds
                            this initiative, helping us nurture the next
                            generation of technologists.
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 font-semibold">
                            A Welcoming &amp; Diverse Environment
                        </h3>
                        <p class="text-slate-900">
                            We are deeply committed to creating "a welcoming and
                            inclusive atmosphere" and are proud that our efforts
                            have resulted in tangible outcomes, such as a
                            significant increase in female attendance at recent
                            conferences. We actively work to improve speaker
                            diversity and value content that promotes
                            psychological safety and teamwork.
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 font-semibold">
                            Our Promise of Community Reinvestment &amp; Radical
                            Transparency
                        </h3>
                        <p class="text-slate-900">
                            We operate with a clear, not-for-profit ethos; "any
                            profits we do make are pumped right back into both
                            our own community and fellows too".
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 font-semibold">
                            Unparalleled financial transparency
                        </h3>
                        <p class="text-slate-900">
                            Unlike most conferences, we practice financial
                            transparency. After our conferences, we publish a
                            <a
                                class="text-wave-orange underline"
                                href="https://norfolkdevelopers.com/posts/2024-06-22-nordevcon-2024-retrospective"
                            >
                                detailed public breakdown of all our finances
                            </a>
                            from venue costs to sponsorship income. This is our
                            incontrovertible proof that your investment is used
                            to benefit the community, not to generate profit.
                        </p>
                    </li>
                    <li>
                        <h3 class="mb-2 font-semibold">
                            Strengthening the Ecosystem
                        </h3>
                        <p class="text-slate-900">
                            Your support helps us keep ticket prices
                            "extraordinary cheap", funds our year-round
                            community activities, and allows us to support other
                            local tech communites and groups.
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="bg-white pt-12">
        <div class="mx-auto max-w-7xl px-4">
            <h2
                class="mb-6 text-4xl tracking-wide text-wave-purple lg:mb-12 lg:text-7xl"
            >
                Our Sponsorship Packages
            </h2>
            <p>
                We offer a number of opportunities for organisations to
                contribute to the community. The packages detailed here serve as
                examples. We believe
                <span class="font-semibold text-wave-pink">
                    the most successful partnerships are tailored to specific
                    goals,
                </span>
                and we are happy to work with you to create a custom package
                that aligns with your budget and desired outcomes.
            </p>
        </div>
    </div>

    <div class="bg-white py-12">
        <div class="relative py-24">
            <div
                class="bg-move absolute inset-y-0 left-0 w-1/2 rounded-r-3xl bg-gradient-to-br from-wave-purple via-wave-pink to-wave-orange"
            ></div>
            <div class="relative mx-auto max-w-7xl px-4">
                <div class="rounded-lg bg-gray-900">
                    <div class="px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
                        <div class="mb-6 text-center">
                            <h2
                                class="mt-2 text-3xl font-bold tracking-wide text-white sm:text-4xl lg:text-5xl"
                            >
                                Our Core Partnership Packages
                            </h2>
                            <p
                                class="mx-auto mt-3 max-w-4xl text-xl text-gray-300 lg:mt-5 lg:text-2xl"
                            >
                                We’ve designed these core packages to offer the
                                most popular and effective ways for our partners
                                to engage with the nor(DEV): community. Each
                                tier is built to deliver exceptional value,
                                whether your goal is to enhance your employer
                                brand, connect with East Anglia's top tech
                                talent, or showcase your products to an engaged
                                audience.
                            </p>
                        </div>

                        <div class="grid gap-12 lg:grid-cols-12">
                            <div
                                class="grid gap-4 lg:col-span-8 lg:grid-cols-2"
                            >
                                <div class="flex overflow-hidden rounded-lg">
                                    <x-package
                                        title="Headline"
                                        price="6,000"
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
        <div class="mx-auto max-w-7xl space-y-6 px-4">
            <div class="rounded-lg bg-gray-900">
                <div class="px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
                    <div class="grid gap-4 lg:grid-cols-12">
                        <div class="lg:col-span-4">
                            <h2
                                class="mt-2 text-3xl font-bold tracking-wide text-white sm:text-4xl lg:text-5xl"
                            >
                                À La Carte Opportunities
                            </h2>
                            <p
                                class="mx-auto mt-3 max-w-4xl text-xl text-gray-300 lg:mt-5 lg:text-2xl"
                            >
                                Beyond our core packages, we offer these
                                standalone opportunities for partners who want
                                to achieve specific goals or add a unique
                                element to their sponsorship.
                            </p>
                        </div>
                        <div class="lg:col-span-4">
                            <div class="flex overflow-hidden rounded-lg">
                                <x-package
                                    title="Refreshment Sponsorship"
                                    price="1,400"
                                    description="Developers sure love a coffee, what better place for your message."
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
                                    description="We round off the conference with a three course meal, free to speakers, and joined by delegates. A great way of talking about your business in a relaxed atmosphere."
                                    :features="[
                                        'Five minute introduction before dinner',
                                        'Two conference tickets, with dinner (+20% discounts on further tickets)',
                                        'Space for two small banners at entrance',
                                        'Logo on place cards',
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

            <div class="rounded-lg bg-gray-900">
                <div class="px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
                    <div class="grid gap-4 lg:grid-cols-12">
                        <div class="lg:order-last lg:col-span-4">
                            <h2
                                class="mt-2 text-3xl font-bold tracking-wide text-white sm:text-4xl lg:text-5xl"
                            >
                                Embed your brand
                            </h2>
                            <p
                                class="mx-auto mt-3 max-w-4xl text-xl text-gray-300 lg:mt-5 lg:text-2xl"
                            >
                                Place your brand on a tangible asset, these
                                packages are designed for maximum.
                            </p>
                        </div>

                        <div class="lg:col-span-4">
                            <div class="flex overflow-hidden rounded-lg">
                                <x-package
                                    title="Media Partner"
                                    price="2,000"
                                    :new="true"
                                    description="Help us share our community's knowledge with the world. Your partnership directly funds the full production of a track of your choice and ensuring these valuable talks are shared on our established YouTube channel."
                                    :features="[
                                        'Up to 2mins of video advert playing on loop during conference breaks',
                                        'Up to 30secs of video advert at either the intro, mid-roll, or end of all published long-form videos from your sponsored track',
                                        'Logo watermark on all published long-form videos',
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
                                    title="Swag Bag Sponsorship"
                                    price="1,000"
                                    description="Imagine your own brand being seen all around our city on our conference bags. Take advantage of this great opportunity to promote your business to a wider audience by placing your logo on our conference bags. Be a part of our community and increase your brand's visibility."
                                    :features="[
                                        'Logo on the Conference Swag Bag',
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

    <div id="contact" class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid gap-4 lg:grid-cols-12">
                <div class="lg:col-span-4">
                    <h2
                        class="mt-2 text-3xl font-bold tracking-wide text-slate-900 sm:text-4xl lg:text-5xl"
                    >
                        Next steps: Ready to Build a Partnership?
                    </h2>
                    <p
                        class="mx-auto mt-3 max-w-4xl text-xl text-slate-700 sm:mt-5 sm:text-2xl"
                    >
                        Thank you for considering a partnership with nor(DEV):
                        con 2026.
                    </p>

                    <p class="mx-auto mt-3 max-w-4xl text-xl text-slate-700">
                        To discuss these opportunities further and find the
                        perfect fit for your organisation, please get in touch!
                        Complete the form. Or pop us an email at
                        <a href="mailto:conference@norfolkdevelopers.com">
                            conference@norfolkdevelopers.com
                        </a>
                    </p>
                </div>

                <form
                    method="POST"
                    class="grid gap-4 overflow-hidden rounded-lg bg-slate-900 p-4 lg:col-span-8 lg:grid-cols-12 lg:gap-8 lg:p-8"
                >
                    @csrf

                    @if (session("success"))
                        <div
                            class="col-span-12 rounded border-green-800 bg-green-300 px-4 py-2 text-green-800"
                        >
                            <p>{{ session("success") }}</p>
                        </div>
                    @endif

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

                    <x-turnstile />

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

    <x-footer />
@endsection
