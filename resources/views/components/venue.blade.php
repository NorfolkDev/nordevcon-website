<div class="mx-auto my-12 flex w-full flex-col gap-8 px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-3">
    <div class="col-span-3">
        <h4 class="mb-4 text-3xl font-black tracking-wide lg:mb-8 lg:text-6xl">
            The Venue
        </h4>
    </div>

    <div class="col-span-1">
        <p>
            King’s conference centre, on Norwich’s King Street, is our venue.
            It’s close to all major transport links, is easy to find and within
            reach of hotels, car parking and the heart of Norwich. No fear of
            getting lost once in the building , the layout is easy to navigate
            and our team of volunteers will be on hand to help at all times.
        </p>

        <p>
            The Venue is accessible throughout, but if you have any concerns
            (or would like to bring a chaperone), please get in contact with
            our team and we can discuss any accomdations we can make.
        </p>

        <ul class="lg:flex lg:gap-2 xl:flex-col">
            <li>
                <a href="https://www.kings-centre.com/"
                    class="inline-block hover:ring-wave-pink-75 mt-4 rounded bg-wave-pink px-4 py-2 text-xl font-black text-white ring-4 ring-wave-pink/50 transition-all hover:ring-8">
                    Visit Venue Website
                </a>
            </li>

            <li>
                <a href="https://maps.app.goo.gl/hd3SpubwvZqrreut7"
                    class="inline-block hover:ring-wave-pink-75 mt-4 rounded bg-wave-pink px-4 py-2 text-xl font-black text-white ring-4 ring-wave-pink/50 transition-all hover:ring-8">
                    View on Google Maps
                </a>
            </li>
        </ul>
    </div>

    <div class="col-span-2 space-y-4">
        <div>
            <p>
                Here is a handy diagram that shows all the conference rooms, including
                the main auditorium.
            </p>
        </div>

        <ol class="ml-4 list-disc space-y-4 md:m-0 md:flex md:gap-2 md:list-none md:space-y-0">
            <li>
                <p class="mb-2">
                    <strong class="font-extrabold">King's Centre: Ground Floor</strong>
                    <br />
                    You'll find the main auditorium, and the venue's Cafe/Breakout space.
                </p>
                <a class="relative group" href="{{ Vite::asset('resources/img/map-ground-floor.jpg') }}"
                    target="_blank">

                    <span
                        class="absolute m-6 h-20 w-20 bottom-0 right-0 p-2 text-wave-orange bg-wave-orange/20 rounded-full opacity-0 group-hover:opacity-90">
                        <x-icons.magnifying-glass />
                    </span>
                    <img src="{{ Vite::asset('resources/img/map-ground-floor.jpg') }}" />
                </a>
            </li>
            <li>
                <p class="mb-2">
                    <strong class="font-extrabold">King's Centre: First Floor</strong>
                    <br />
                    Conference Room 1 & 2 are located on the first floor. There's a range of
                    access to this floor; inc. three stairwells, and lift.
                </p>
                <a class="relative group" href="{{ Vite::asset('resources/img/map-first-floor.jpg') }}" target="_blank">
                    <span
                        class="absolute m-6 h-20 w-20 bottom-0 right-0 p-2 text-wave-orange bg-wave-orange/20 rounded-full opacity-0 group-hover:opacity-90">
                        <x-icons.magnifying-glass />
                    </span>

                    <img src="{{ Vite::asset('resources/img/map-first-floor.jpg') }}" />
                </a>
            </li>
        </ol>
    </div>
</div>
