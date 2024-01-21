<div class="mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h4 class="mb-4 text-3xl font-black tracking-wide lg:text-6xl">
        Workshops
    </h4>

    <p class="mb-8 font-condensed text-xl">
        Enhance the learns with practical hands-on workshops with #nordevcon24
        speakers. These affordable half-day and full-day workshops are run by
        experienced professionals; using this technology day-in day-out. We'll
        provide the refreshments, tea, coffee, a spot of lunch. All you need is
        your face, and a laptop.
    </p>

    <p class="mb-8 font-condensed text-xl">
        Running the day before the conference in the same venue (Kings Centre),
        is our workshop day. The 14th February, we play host to you, and your
        tutor. Get some initial insights into the technology we'll be talking
        about at the conference and some first-hand knowledge. Join sessions
        throughout the conference to top-up your knowledge and grab your chance
        to ask for advice and get those questions that had you awake til the
        early hours.
    </p>

    <ul class="relative flex flex-col gap-4 sm:gap-6 lg:gap-7">
        <x-workshops.item
            headline="Go Get Better"
            :image="Vite::asset('resources/img/workshop_golang.jpg')"
            date="Wednesday, 14th February. 10am to 5pm"
            description="Fancy dipping your toe into a new language? Join us, and Dom, and let's take the journey."
            label="Grab a seat for £46!"
        />

        <x-workshops.item
            align="right"
            headline="Fabric: AI Data Analytics"
            image="{{ Vite::asset('resources/img/workshop_fabric.jpg') }}"
            date="Wednesday, 14 February 2024. 10am – 1pm"
            description="An all-in-one analytics solution that covers everything from data movement to data science, real-time analytics, and business intelligence."
            label="Grab a seat for £28!"
        />

        <x-workshops.item
            headline="Describing Narratives"
            image="{{ Vite::asset('resources/img/workshop_ink.jpg') }}"
            date="Wednesday, 14th February. 2pm to 5pm"
            description="A narrative scripting language for games."
            label="Grab a seat for £28!"
        />
    </ul>
</div>
