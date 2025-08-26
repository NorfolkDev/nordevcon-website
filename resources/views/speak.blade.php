@extends("layouts.page")

@section('title', "Speak - nor(DEV):con")

@section("page")
    <div class="bg-gray-100">
        <div
            class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
        >
            <div class="text-center">
                <h1
                    class="text-4xl font-black tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                    Speak at nor(DEV): con
                </h1>
                <p
                    class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                >
                    An Invitation to Share Your Knowledge
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:text-center">
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                A conference built by the community, for the community. Speaking
                with us is an opportunity to share your passion and expertise
                with a diverse and engaged audience that includes everyone from
                students to seasoned professionals. We are a not-for-profit
                event with a core mission to bring high-quality technical
                content to Norfolk and strengthen the regional tech ecosystem.
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                We pride ourselves on creating a welcoming and inclusive
                atmosphere. We are a fantastic platform for both experienced
                speakers and those new to the stage. When you speak at nor(DEV):
                con, you become a part of a friendly, supportive, and curious
                community.
            </p>
            <div class="mt-6">
                <a
                    href="{{ config("variables.cfp_url") }}"
                    class="hover:bg-wave-purple-dark inline-flex items-center justify-center rounded-md border border-transparent bg-wave-purple px-5 py-3 text-base font-medium text-white"
                >
                    Apply to talk
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2
                    class="text-base font-semibold uppercase tracking-wide text-wave-purple"
                >
                    Our Talk Selection Process
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Fair and Transparent
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We are committed to a fair and transparent selection
                    process. To help us, we use the Sessionize platform, which
                    automates evaluations and ensures the privacy of all
                    submissions.
                </p>

                <div class="mx-auto mt-4 max-w-2xl text-left">
                    <p class="text-xl text-gray-500 lg:mx-auto">
                        Our evaluation timeline is as follows:
                    </p>

                    <ol role="list" class="mx-auto mt-4 space-y-6 text-left">
                        @foreach ($timeline as $entry)
                            <x-timeline.item :entry="$entry" />
                        @endforeach
                    </ol>

                    <p class="mt-4 max-w-2xl text-gray-500 lg:mx-auto">
                        <span class="font-bold">Please Note:</span>
                        As a volunteer-run organisation, this timeline is a
                        guideline and may be subject to change based on team
                        availability. Furthermore, as a small non-profit
                        conference, our speaker expense budget is limited. This
                        will be a factor in our selection process, particularly
                        for submissions that require international flights.
                    </p>
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
                    Our Commitment to Speakers
                </h2>
                <p
                    class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl"
                >
                    Support and Benefits
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our goal is to make your experience as smooth and rewarding
                    as possible. We are proud to offer a comprehensive support
                    package to everyone who takes the stage.
                </p>
                <ul
                    class="mt-4 max-w-2xl list-disc text-left text-xl text-gray-500 lg:mx-auto"
                >
                    <li>
                        <span class="font-bold">Travel & Accommodation:</span>
                        We cover your travel and accommodation costs.
                    </li>
                    <li>
                        <span class="font-bold">Conference Tickets:</span>
                        You will receive a free conference ticket for yourself
                        and a guest, which includes access to both days and our
                        evening socials.
                    </li>
                    <li>
                        <span class="font-bold">Conference Dinner:</span>
                        You and a guest are invited to join us for our
                        post-conference dinner on Friday evening as a thank you
                        for your contribution.
                    </li>
                    <li>
                        <span class="font-bold">Conference T-Shirt:</span>
                        You and a guest will each receive a free conference
                        t-shirt with your name in the credits on the back.
                    </li>
                    <li>
                        <span class="font-bold">Visa Support:</span>
                        We can provide an invitation letter to support your visa
                        application if required.
                    </li>
                </ul>
                <h3
                    class="mt-4 text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl"
                >
                    On-Site Support:
                </h3>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    To ensure you can focus on delivering a great presentation,
                    we provide dedicated support on the day. This includes a
                    secure Wi-Fi network for speakers and dedicated time slots
                    before the conference starts for you to test your laptop and
                    A/V setup with our team.
                </p>
            </div>
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
