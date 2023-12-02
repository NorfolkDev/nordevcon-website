<div class="bg-indigo-700">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
        <h2
            class="mb-6 text-3xl font-bold tracking-tight text-indigo-100 lg:text-5xl"
        >
            Sponsors
        </h2>

        <p class="mb-12 text-center text-2xl text-indigo-100">
            The Norfolk Developers Conference wouldn't be possible without the
            support of our wonderful sponsors. We're really grateful for their
            trust and support; and are proud to feature them below.
        </p>

        <div class="flex flex-col gap-12">
            <div class="text-wave-purple">
                <p class="text-center text-2xl text-indigo-100">
                    Would you like to Sponsor East Anglia's biggest tech
                    conference? Packages starting at £500. Get in touch and
                    let's talk about a conference sponsorship.
                </p>
            </div>

            @foreach ($sponsors->where("package", "Elite") as $sponsor)
                <div
                    class="grid rounded-md bg-indigo-100 p-4 lg:grid-cols-2 lg:items-center lg:gap-6 lg:p-12"
                >
                    <div>
                        <h2
                            class="mb-6 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
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
                            alt="Elite Sponsor, {{ $sponsor->name }}"
                        />
                    </div>
                </div>
            @endforeach

            <div class="grid auto-rows-fr gap-6 lg:grid-cols-2">
                @foreach ($sponsors->where("package", "Partner") as $sponsor)
                    <div
                        class="flex flex-col items-center rounded-md bg-indigo-100 px-8 py-8"
                    >
                        <img
                            class="object-contain"
                            src="{{ $sponsor->logo }}"
                            alt="Partner Sponsor, {{ $sponsor->name }}"
                        />

                        <div class="mt-8 flex grow flex-col">
                            <h3 class="mb-2 text-3xl font-bold">
                                {{ $sponsor->name }}
                            </h3>
                            <div class="grow">
                                <p>{{ $sponsor->description }}</p>
                            </div>
                            <div class="mt-8 flex gap-4">
                                <!-- Socials -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="grid auto-rows-fr grid-cols-2 gap-6 lg:grid-cols-4">
                @foreach ($sponsors->where("package", "Associate") as $sponsor)
                    <a
                        href="{{ $sponsor->website }}"
                        class="col-span-1 flex justify-center rounded-md bg-indigo-100 px-8 py-8"
                    >
                        <img
                            class="object-contain"
                            src="{{ $sponsor->logo }}"
                            alt="Associate Sponsor, {{ $sponsor->name }}"
                        />
                    </a>
                @endforeach
            </div>

            <div class="mt-12 flex items-center justify-center gap-6">
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
</div>
