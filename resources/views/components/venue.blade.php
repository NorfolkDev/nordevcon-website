<div
    class="mx-auto my-12 flex w-full flex-col gap-8 px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-3"
>
    <div class="col-span-1">
        <p>
            We'll be at King’s conference centre, on King Street in the heart of
            Norwich. It’s easy to find: close to all major transport links, as
            well as hotels and car parks. No fear of getting lost in the
            building either. The layout is easy to navigate and our team of
            volunteers will be on hand to help at all times.
        </p>

        <p>
            King's is accessible throughout. But if you have any concerns (or
            would like to bring a chaperone), please contact our team. We're
            happy to discuss how we can support you.]
        </p>

        <ul class="lg:flex lg:gap-2 xl:flex-col">
            <li>
                <a
                    href="https://www.kings-centre.com/"
                    class="hover:ring-wave-pink-75 mt-4 inline-block rounded bg-wave-pink px-4 py-2 text-xl font-black text-white ring-4 ring-wave-pink/50 transition-all hover:ring-8"
                >
                    Visit Venue Website
                </a>
            </li>

            <li>
                <a
                    href="https://maps.app.goo.gl/hd3SpubwvZqrreut7"
                    class="hover:ring-wave-pink-75 mt-4 inline-block rounded bg-wave-pink px-4 py-2 text-xl font-black text-white ring-4 ring-wave-pink/50 transition-all hover:ring-8"
                >
                    View on Google Maps
                </a>
            </li>
        </ul>
    </div>

    <div class="col-span-2 space-y-4">
        <div>
            <p>
                Here is a handy diagram that shows all the conference rooms,
                including the main auditorium.
            </p>
        </div>

        <ol
            class="ml-4 list-disc space-y-4 md:m-0 md:flex md:list-none md:gap-2 md:space-y-0"
        >
            <li>
                <p class="mb-2">
                    <strong class="font-extrabold">
                        King's Centre: Ground Floor
                    </strong>
                    <br />
                    You'll find the main auditorium, and the venue's
                    Cafe/Breakout space.
                </p>
                <a
                    class="group relative"
                    href="{{ Vite::asset("resources/img/map-ground-floor.jpg") }}"
                    target="_blank"
                >
                    <span
                        class="absolute bottom-0 right-0 m-6 h-20 w-20 rounded-full bg-wave-orange/20 p-2 text-wave-orange opacity-0 group-hover:opacity-90"
                    >
                        <x-icons.magnifying-glass />
                    </span>
                    <img
                        src="{{ Vite::asset("resources/img/map-ground-floor.jpg") }}"
                    />
                </a>
            </li>
            <li>
                <p class="mb-2">
                    <strong class="font-extrabold">
                        King's Centre: First Floor
                    </strong>
                    <br />
                    Conference Room 1 & 2 are located on the first floor.
                    There's a range of access to this floor; inc. three
                    stairwells, and lift.
                </p>
                <a
                    class="group relative"
                    href="{{ Vite::asset("resources/img/map-first-floor.jpg") }}"
                    target="_blank"
                >
                    <span
                        class="absolute bottom-0 right-0 m-6 h-20 w-20 rounded-full bg-wave-orange/20 p-2 text-wave-orange opacity-0 group-hover:opacity-90"
                    >
                        <x-icons.magnifying-glass />
                    </span>

                    <img
                        src="{{ Vite::asset("resources/img/map-first-floor.jpg") }}"
                    />
                </a>
            </li>
        </ol>
    </div>
</div>
