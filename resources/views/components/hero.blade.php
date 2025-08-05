<section
    class="relative flex min-h-[max(80vh,800px)] flex-col justify-between bg-slate-900"
>
    <div
        class="z-50 flex flex-col-reverse justify-between gap-4 p-8 px-16 pb-32 lg:flex-row lg:gap-8 lg:pb-36 lg:pl-32"
    >
        <div class="hidden lg:block"></div>
        <div class="flex flex-col items-end gap-8 text-white">
            <x-logo class="w-full max-w-sm lg:max-w-lg" />
            <p
                class="font-display bg-move inline bg-gradient-to-r from-wave-purple via-wave-pink to-wave-orange bg-clip-text text-right text-4xl font-extrabold leading-normal tracking-tight text-transparent lg:text-6xl"
            >
                {{ config("variables.date") }}
            </p>
            <div class="flex flex-col items-end gap-4">
                <div class="relative inline-block text-left">
                    <button
                        type="button"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button"
                        aria-expanded="true"
                        aria-haspopup="true"
                    >
                        About
                        <svg
                            class="-mr-1 h-5 w-5 text-gray-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <div
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-button"
                        tabindex="-1"
                    >
                        <div class="py-1" role="none">
                            <a
                                href="/about"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-0"
                            >
                                Our Story & Mission
                            </a>
                            <a
                                href="/about#values"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-1"
                            >
                                Our Values in Action
                            </a>
                            <a
                                href="/about#team"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-2"
                            >
                                The Team
                            </a>
                            <a
                                href="/about#coc"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-3"
                            >
                                Code of Conduct
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left">
                    <button
                        type="button"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button"
                        aria-expanded="true"
                        aria-haspopup="true"
                    >
                        The Event
                        <svg
                            class="-mr-1 h-5 w-5 text-gray-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <div
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-button"
                        tabindex="-1"
                    >
                        <div class="py-1" role="none">
                            <a
                                href="/conference#schedule"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-0"
                            >
                                Schedule at a Glance
                            </a>
                            <a
                                href="/conference#full-schedule"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-1"
                            >
                                Full Schedule
                            </a>
                            <a
                                href="/conference#speakers"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-2"
                            >
                                Speakers
                            </a>
                            <a
                                href="/conference#workshops"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-3"
                            >
                                Workshops
                            </a>
                            <a
                                href="/conference#socials"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-4"
                            >
                                Socials & Networking
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left">
                    <button
                        type="button"
                        class="bg-.bg-white inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button"
                        aria-expanded="true"
                        aria-haspopup="true"
                    >
                        Attend
                        <svg
                            class="-mr-1 h-5 w-5 text-gray-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <div
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-button"
                        tabindex="-1"
                    >
                        <div class="py-1" role="none">
                            <a
                                href="/attend#tickets"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-0"
                            >
                                Tickets & Pricing
                            </a>
                            <a
                                href="/attend#scholarship"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-1"
                            >
                                Scholarship Program
                            </a>
                            <a
                                href="/attend#venue"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-2"
                            >
                                Venue & Travel
                            </a>
                            <a
                                href="/attend#why-attend"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-3"
                            >
                                Why Attend?
                            </a>
                            <a
                                href="/attend#convince-boss"
                                class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem"
                                tabindex="-1"
                                id="menu-item-4"
                            >
                                Convince Your Boss
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/sponsors" class="text-white">Sponsors</a>
                <a href="/blog" class="text-white">Blog/News</a>
            </div>
        </div>
    </div>
</section>

<div class="sticky -top-[6vw] z-40 -mb-[6vw] -mt-[6vw]">
    <div
        class="absolute bottom-2/3 left-0 right-0 z-50 flex overflow-hidden lg:items-end lg:justify-end"
    >
        <div
            class="w-full min-w-[80rem] opacity-25 lg:max-w-3xl lg:opacity-100 xl:max-w-5xl 2xl:max-w-7xl"
        >
            <x-illustration.city />
        </div>
    </div>

    <x-wave />

    <img
        class="absolute bottom-1/2 z-50 max-w-[50vw] lg:max-w-[30vw]"
        width="400"
        height="363"
        src="{{ Vite::asset("resources/img/poster-crab.png") }}"
    />
</div>
