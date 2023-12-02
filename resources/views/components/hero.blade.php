<section
    class="flex min-h-[70dvh] flex-col justify-between overflow-hidden bg-slate-900"
>
    <div
        class="pointer-events-none flex select-none flex-col gap-8 p-4 py-16 md:mb-16 md:p-16 md:pt-32"
    >
        <div class="max-w-sm text-white md:max-w-lg">
            <x-logo />
        </div>
        <div>
            <p
                class="font-display bg-move inline bg-gradient-to-r from-wave-purple via-wave-pink to-wave-orange bg-clip-text text-5xl font-extrabold leading-normal tracking-tight text-transparent"
            >
                {{ config("variables.title") }}
            </p>
        </div>
        <div>
            <p class="text-4xl font-extrabold tracking-tight text-white">
                {{ config("variables.date") }}
            </p>
        </div>
    </div>

    <div class="px-4 md:px-16">
        <dl
            class="flex flex flex-col justify-end divide-dotted divide-wave-orange/50 text-2xl text-white md:flex-row md:divide-x-2"
        >
            <div class="py-2 md:px-4">
                <dt
                    class="mb-1 font-condensed font-condensed text-sm font-black font-black font-black uppercase tracking-wide text-wave-orange"
                >
                    Speakers
                </dt>
                <dt>{{ $speakerCount }}</dt>
            </div>
            <div class="py-2 md:px-4">
                <dt
                    class="mb-1 font-condensed font-condensed text-sm font-black font-black font-black uppercase tracking-wide text-wave-orange"
                >
                    People Attending
                </dt>
                <dt>{{ config("variables.attendees") }}</dt>
            </div>

            <div class="py-2 md:px-4">
                <dt
                    class="mb-1 font-condensed font-condensed text-sm font-black font-black font-black uppercase tracking-wide text-wave-orange"
                >
                    Venue
                </dt>
                <dt>{{ config("variables.venue") }}</dt>
            </div>

            <div class="py-2 md:px-4">
                <dt
                    class="mb-1 font-condensed font-condensed text-sm font-black font-black font-black uppercase tracking-wide text-wave-orange"
                >
                    Location
                </dt>
                <dt>{{ config("variables.location") }}</dt>
            </div>
        </dl>
    </div>
</section>

<svg
    class="sticky top-[-3.8vw] z-40"
    viewBox="0 0 1584 68"
    xmlns="http://www.w3.org/2000/svg"
>
    <rect width="1584" height="68" fill="#53345D" />
    <path
        d="M0 32.4882L33.088 38.5198C66.352 44.4456 132.528 56.5087 198.528 53.6516C264.528 50.7946 330.352 33.2289 396.352 27.1974C462.352 21.1658 528.528 26.8799 594.528 30.5835C660.528 34.2871 726.352 35.9802 792.352 42.8583C858.352 49.7364 924.528 61.7996 990.528 66.0322C1056.53 70.2649 1122.35 66.6671 1188.35 64.5508C1254.35 62.4345 1320.53 61.7996 1386.53 55.5563C1452.53 49.419 1518.35 37.7791 1551.09 31.9591L1584 26.1392V0C1584 0 1583.82 0 1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 32.4882Z"
        fill="#0F172A"
    />
</svg>
<svg
    class="sticky top-[-4.3vw] z-30"
    viewBox="0 0 1584 120"
    xmlns="http://www.w3.org/2000/svg"
>
    <rect width="1584" height="120" fill="#AC4B74" />
    <path
        d="M0 91.3543L33.088 91.9715C66.352 92.5888 132.528 93.8233 198.528 98.5145C264.528 103.329 330.352 111.477 396.352 106.539C462.352 101.601 528.528 83.5768 594.528 79.9967C660.528 76.5401 726.352 87.6507 792.352 95.0578C858.352 102.465 924.528 106.168 990.528 111.724C1056.53 117.279 1122.35 124.686 1188.35 116.045C1254.35 107.403 1320.53 82.7127 1386.53 76.9104C1452.53 71.2316 1518.35 84.3175 1551.09 90.9839L1584 97.5269V0L1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 91.3543Z"
        fill="#53345D"
    />
</svg>
<svg
    class="sticky top-[-3vw] z-20"
    viewBox="0 0 1584 154"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
>
    <rect width="1584" height="154" fill="#FA7268" />
    <path
        d="M0 109.5L33.088 106.5C88 103.5 131.5 105.5 196.5 113C262.5 118.556 330.352 121.078 396.352 127.298C462.352 133.517 528.528 136.337 594.528 136.171C660.528 136.005 726.352 133.02 792.352 130.946C858.352 128.873 924.528 127.712 990.528 128.707C1056.53 129.702 1122.35 132.688 1188.35 131.859C1254.35 131.029 1320.53 126.385 1386.53 129.371C1452.53 132.439 1518.35 143.22 1551.09 148.61L1584 154V0L1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 109.5Z"
        fill="#AC4B74"
    />
</svg>
<div class="sticky top-0 z-10 -mb-16">
    <svg viewBox="0 0 1584 181" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 141.509L33.088 143.155C66.352 144.8 132.528 148.091 198.528 151.135C264.528 154.097 330.352 156.894 396.352 160.596C462.352 164.299 528.528 168.906 594.528 169.482C660.528 170.058 726.352 166.438 792.352 158.21C858.352 149.983 924.528 137.149 990.528 132.459C1056.53 127.77 1122.35 131.39 1188.35 139.452C1254.35 147.515 1320.53 164.349 1386.53 172C1452.53 179.651 1449.26 179.684 1482 181L1584 181V0L1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 141.509Z"
            fill="#FA7268"
        />
    </svg>

    <a
        target="_blank"
        class="absolute bottom-0 right-0 z-50 mb-4 mr-8 hidden rounded bg-wave-purple px-4 py-2 font-black text-white xl:block"
        href="{{ config("variables.ticket_url") }}"
    >
        Buy Tickets
    </a>
</div>
