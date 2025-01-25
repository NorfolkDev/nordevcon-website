<div
    id="schedule"
    class="relative mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8"
    x-data="{ favourites: $persist([]) }"
>
    <h4 class="mb-4 text-3xl font-black tracking-wide lg:mb-8 lg:text-6xl">
        The Schedule
    </h4>

    <div
        class="sticky right-0 top-[6vw] z-10 flex flex-col gap-2 overflow-hidden rounded-tl-lg rounded-tr-lg border-b-2 bg-white sm:flex-row sm:items-center lg:gap-4 lg:p-4"
    >
        <div>
            <x-schedule.legend />
        </div>
        <div class="flex flex-1 justify-end p-2 lg:p-0">
            <a
                :href="`/schedule?s=${favourites.join(',')}`"
                :class="`${favourites.length ? 'opacity-100' : 'opacity-0'} transition flex rounded-md bg-wave-purple px-4 py-2 font-bold text-white`"
                href="/schedule?share=41"
            >
                View
                <span class="lg:hidden 2xl:inline">&nbsp;your schedule</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    ></path>
                </svg>
            </a>
        </div>
    </div>

    <ol
        class="grid grid-cols-[auto_repeat(1,_1fr)] gap-4 lg:grid-cols-[auto_repeat(3,_1fr)]"
    >
        @foreach ($schedule->days as $day)
            <li class="col-span-2 py-4 text-2xl font-bold lg:col-span-4">
                Day #{{ $loop->index + 1 }}:
                {{ $day->date->isoFormat("dddd, Do MMM") }}
            </li>
            @foreach ($day->timeSlots as $timeSlot)
                <li>
                    <h3
                        class="pt-2 align-top text-2xl tabular-nums leading-none text-gray-600"
                    >
                        {{ $timeSlot->time }}
                    </h3>
                </li>

                @foreach ($timeSlot->sessions as $session)
                    <li
                        @class([
                            "lg:col-span-3" => $session->isPlenumSession,
                            "lg:row-span-2" => $session->duration === 90,
                            "{$session->theme}" => ! $session->isServiceSession,
                            "border-l-8 p-2",
                            "col-start-2 lg:col-start-auto",
                        ])
                    >
                        <div
                            class="align-center flex items-start justify-between"
                        >
                            <button
                                @class(["text-left font-bold leading-none", "cursor-pointer hover:text-wave-purple" => $session->description])
                                @if($session->description) dialog @endif
                            >
                                {{ $session->title }}
                            </button>
                            @unless ($session->isServiceSession)
                                <button
                                    class="text-yellow-500"
                                    data-session-id="{{ $session->id }}"
                                    @click="favourites.includes('{{ $session->id }}') ? favourites.splice(favourites.indexOf('{{ $session->id }}'), 1) : favourites.push('{{ $session->id }}')"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        :fill="favourites.includes('{{ $session->id }}') ? 'currentColor' : 'none'"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </button>
                            @endunless

                            <x-schedule.dialog :session="$session" />
                        </div>

                        <p>
                            {{ $session->speakers->map->fullName->join(", ") }}
                        </p>
                    </li>
                @endforeach
            @endforeach
        @endforeach
    </ol>
</div>
