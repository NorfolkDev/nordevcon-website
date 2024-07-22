@extends("layouts.default")

@section('title', "Volunteer at nor(DEV):con")

@section("content")
    <div
        class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
    >
        <h1 class="mb-4 text-3xl font-black tracking-wide lg:mb-8 lg:text-6xl">
            Volunteer at nor(DEV):con
        </h1>

        <div class="space-y-8">
            <div class="overflow-hidden rounded-lg bg-white">
                <img
                    src="{{ Vite::asset("resources/img/volunteer-team.jpg") }}"
                    class="mb-4"
                />

                <div class="prose max-w-none px-4 py-2">
                    <h2>Join Our Team of Volunteers</h2>

                    <p>
                        nor(DEV):con relies on the hard work and dedication of
                        volunteers. Without their tireless efforts and
                        unwavering dedication, bringing this event to life would
                        not be possible. We are deeply grateful for the vital
                        role volunteers play in ensuring the success of our
                        conference.
                    </p>
                    <p>
                        Below, you will find information about the various
                        volunteer roles and responsibilities. We invite you to
                        explore these opportunities and consider joining our
                        team. Your contribution will make a significant impact,
                        and together, we can create an unforgettable experience
                        for all attendees.
                    </p>

                    <h3>Reception/Check-In</h3>

                    <ul>
                        <li>
                            Check-In: Greet delegates and check them in using
                            the Tito app, making them feel welcome right from
                            the start.
                        </li>
                        <li>
                            Queue Coordination: Keep the line moving by
                            directing delegates to collect their swag bags and
                            pre-ordered merchandise.
                        </li>
                        <li>
                            Information Hub: Answer general questions from
                            delegates, providing them with the information they
                            need to have a great experience.
                        </li>
                        <li>
                            Continuous Presence: Ensure there is always someone
                            at the check-in desk to assist newcomers.
                        </li>
                        <li>
                            Welcoming Atmosphere: Be the friendly face that
                            kicks off everyone's event experience on a positive
                            note.
                        </li>
                    </ul>

                    <h3>Room Host</h3>

                    <ul>
                        <li>
                            Speaker introduction: introduce each speaker to help
                            kick off the start of their talk.
                        </li>
                        <li>
                            Time Management: Ensure talks start and end on time
                            by giving speakers a 5-minute warning before their
                            slot ends.
                        </li>
                        <li>
                            Delegate Assistance: Help delegates find their seats
                            and answer any questions they might have.
                        </li>
                        <li>
                            Room Maintenance: Keep the room tidy and presentable
                            throughout the day.
                        </li>
                        <li>
                            Monitoring: Stay in the room during talks to handle
                            any issues that arise.
                        </li>
                        <li>
                            Team Support: Work with the Room AV Volunteer to
                            keep things running smoothly.
                        </li>
                    </ul>

                    <h3>Room AV</h3>

                    <ul>
                        <li>
                            Recording Management: Start and stop recordings.
                        </li>
                        <li>
                            Technical Assistance: Help speakers with projectors
                            and other AV needs, ensuring their presentations go
                            smoothly.
                        </li>
                        <li>
                            Issue Reporting: Notify the AV Lead about any
                            problems right away to minimise disruptions.
                        </li>
                        <li>
                            Team Support: Partner with the Room Host to manage
                            the room and assist speakers and delegates
                        </li>
                    </ul>

                    <h3>General Support</h3>

                    <ul>
                        <li>
                            Directional Assistance: Guide delegates to the right
                            rooms for talks they want to see.
                        </li>
                        <li>
                            Crowd Control: Keep access points clear so everyone
                            can move around easily.
                        </li>
                        <li>
                            Team Support: Fill in for other volunteers during
                            their breaks to keep things running smoothly.
                        </li>
                        <li>
                            General Help: Help delegates and other volunteers
                            where needed.
                        </li>
                    </ul>

                    <h3>Merch Stand</h3>

                    <ul>
                        <li>
                            Customer Transactions: Run the merch stand and
                            handle sales transactions.
                        </li>
                        <li>
                            Order Fulfilment: Hand out pre-ordered merch to
                            delegates.
                        </li>
                        <li>
                            Stand Staffing: Ensure the merch stand is always
                            staffed.
                        </li>
                        <li>
                            Display Maintenance: Keep the merch display
                            organised.
                        </li>
                    </ul>

                    <h3>Raffle Stand</h3>

                    <ul>
                        <li>
                            Customer Transactions: Run the raffle stand and
                            handle sales transactions.
                        </li>
                        <li>
                            Ticket Distribution: Hand out raffle tickets and
                            take down contact info for those who won’t be around
                            for the draw.
                        </li>
                        <li>
                            Stand Staffing: Ensure the raffle stand is always
                            staffed.
                        </li>
                        <li>
                            Promotion: Generate interest in the raffle by
                            highlighting the prizes and supporting a good cause.
                        </li>
                    </ul>

                    <h3>Media/Marketing Support</h3>

                    <ul>
                        <li>
                            Media Assistance: Assisting our media team and
                            encourage engagement.
                        </li>
                        <li>
                            Speaker Coordination: Guide speakers to the right
                            spots for photos and interviews.
                        </li>
                        <li>
                            Content Creation: Help capture engaging content for
                            marketing purposes, showcasing the best parts of the
                            event.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <a
                    href="https://airtable.com/appNp9z5teUfhU1lf/shrD4Qm2Z030eeGxY"
                    class="flex items-center justify-center rounded-md border border-transparent bg-wave-orange px-5 py-3 text-lg font-extrabold text-white ring-4 ring-wave-orange/75 transition-all hover:ring-8 lg:text-2xl"
                    target="_blank"
                >
                    Apply to volunteer
                </a>
            </div>
        </div>
    </div>

    <x-newsletter />
    <x-footer />
@endsection
