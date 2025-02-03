<div class="mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h4 class="mb-4 text-3xl font-black tracking-wide lg:text-6xl">
        Workshops
    </h4>

    <p class="mb-8 font-condensed text-xl">
        Enhance the learns with practical hands-on workshops with #nordevcon25
        speakers. These affordable half-day and full-day workshops are run by
        experienced professionals; using this technology day-in day-out. We'll
        provide the refreshments, tea, coffee, a spot of lunch. All you need is
        your face, and a laptop.
    </p>

    <p class="mb-8 font-condensed text-xl">
        Running the day before the conference in the same venue (Kings Centre),
        is our workshop day. The 26th February, we play host to you, and your
        tutor. Get some initial insights into the technology we'll be talking
        about at the conference and some first-hand knowledge. Join sessions
        throughout the conference to top-up your knowledge and grab your chance
        to ask for advice and get those questions that had you awake til the
        early hours.
    </p>

    <ul class="relative flex flex-col gap-4 sm:gap-6 lg:gap-7">
        <x-workshops.item
            headline="Become a TypeScript Wizard"
            :image="Vite::asset('resources/img/workshop_typescript.jpg')"
            date="Wednesday, 26th February. 10am to 5pm"
            description="This workshop is a condensed version of Matt Pocock’s renowned TypeScript Wizard Course, designed to deliver practical, real-world knowledge in just one day. The day includes hands-on exercises, in-depth guidance on advanced TypeScript features like generics and type transformations, and plenty of time for questions."
            label="Grab a seat for £200!"
        />

        <x-workshops.item
            align="right"
            headline="Building an Expression Language from Scratch"
            :image="Vite::asset('resources/img/workshop_generic.jpg')"
            date="Wednesday, 26th February. 10am to 1pm"
            description="Whether you're an aspiring language designer or just curious about how programming languages process code, this workshop will give you the foundational knowledge and hands-on experience to start building your own interpreters."
            label="Grab a seat for just £20!"
        />

        <x-workshops.item
            headline="Build without limits"
            :image="Vite::asset('resources/img/workshop_generic.jpg')"
            date="Wednesday, 26th February. 2pm to 5pm"
            description="A deep dive into Generative AI for developers! Learn how to harness the power of AI-driven coding tools to write code faster, reduce defects, and boost your productivity."
            label="Grab a seat for just £20!"
        />
    </ul>
</div>
