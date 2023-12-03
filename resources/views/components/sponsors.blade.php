<div class="bg-slate-900">
    <div
        class="mx-auto flex max-w-7xl flex-col gap-12 px-4 py-12 sm:px-6 lg:px-8 lg:py-20"
    >
        <h2
            class="text-5xl font-black tracking-wide text-wave-orange lg:text-6xl"
        >
            Sponsors
        </h2>

        <p class="text-center text-2xl text-indigo-100">
            The Norfolk Developers Conference wouldn't be possible without the
            support of our wonderful sponsors. We're really grateful for their
            trust and support; and are proud to feature them below.
        </p>

        <ol class="flex flex-col gap-6">
            <li>
                <ol>
                    @foreach ($sponsors->where("package", "Elite") as $sponsor)
                        <li
                            class="grid rounded-md bg-indigo-100 p-4 lg:grid-cols-2 lg:items-center lg:gap-6 lg:p-12"
                        >
                            <div>
                                <label
                                    class="mb-4 inline-block rounded bg-wave-orange px-2 py-1 font-black text-white"
                                >
                                    {{ $sponsor->package }} Sponsor
                                </label>

                                <h2 class="mb-6 text-3xl font-bold sm:text-4xl">
                                    {{ $sponsor->name }}
                                </h2>

                                <p>{{ $sponsor->description }}</p>
                                <div class="mt-8 flex gap-4">
                                    <!-- Socials -->
                                </div>
                            </div>
                            <div
                                class="col-span-1 row-start-1 flex justify-center px-8 py-8 lg:row-start-auto"
                            >
                                <img
                                    class="object-contain"
                                    src="{{ $sponsor->logo }}"
                                    alt="Logo for Elite Sponsor, {{ $sponsor->name }}"
                                />
                            </div>
                        </li>
                    @endforeach
                </ol>
            </li>
            <li>
                <ol class="grid gap-6 lg:auto-rows-fr lg:grid-cols-2">
                    @foreach ($sponsors->where("package", "Partner") as $sponsor)
                        <li class="rounded-md bg-indigo-100 px-8 py-8">
                            <label
                                class="mb-4 inline-block rounded bg-wave-orange px-2 py-1 font-black text-white"
                            >
                                {{ $sponsor->package }} Sponsor
                            </label>

                            <div class="flex grow flex-col">
                                <h3 class="text-3xl font-bold">
                                    {{ $sponsor->name }}
                                </h3>
                                <div class="py-4">
                                    <img
                                        class="mx-auto object-contain"
                                        src="{{ $sponsor->logo }}"
                                        alt="Logo for Partner Sponsor, {{ $sponsor->name }}"
                                    />
                                </div>
                                <div class="grow">
                                    <p>{{ $sponsor->description }}</p>
                                </div>
                                <div class="mt-8 flex gap-4">
                                    <!-- Socials -->
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </li>
            <li>
                <ol class="grid auto-rows-fr grid-cols-2 gap-6 lg:grid-cols-4">
                    @foreach ($sponsors->where("package", "Associate") as $sponsor)
                        <li
                            class="col-span-1 flex rounded-md bg-indigo-100 px-8 py-8"
                        >
                            <label class="sr-only">
                                {{ $sponsor->package }} Sponsor
                            </label>
                            <a
                                href="{{ $sponsor->website }}"
                                class="flex justify-center"
                            >
                                <img
                                    class="object-contain"
                                    src="{{ $sponsor->logo }}"
                                    alt="Logo for Associate Sponsor, {{ $sponsor->name }}"
                                />
                            </a>
                        </li>
                    @endforeach
                </ol>
            </li>
        </ol>

        <p class="text-center text-2xl text-indigo-100">
            Would you like to Sponsor East Anglia's biggest tech conference?
            Packages starting at £500. Get in touch and let's talk about a
            conference sponsorship.
        </p>

        <p class="text-center text-2xl text-indigo-100">
            nor(DEV): com is on the lookout for sponsors to contribute to the
            success of our innovative and inclusive tech conference. By becoming
            a sponsor, you play a crucial role in our community-driven event,
            helping us keep costs reasonable for attendees.
        </p>

        <div class="flex items-center justify-center gap-6">
            <a
                href="{{ config("variables.sponsor_apply_url") }}"
                class="rounded-md border border-transparent bg-violet-800 px-8 py-4 text-xl font-bold text-indigo-100 hover:bg-violet-700"
            >
                Apply to sponsor
            </a>
            <a
                href="/sponsorship"
                class="rounded-md border border-transparent bg-violet-600 px-8 py-4 text-xl font-bold text-indigo-100 hover:bg-violet-500"
            >
                Read more
            </a>
        </div>
    </div>
</div>
