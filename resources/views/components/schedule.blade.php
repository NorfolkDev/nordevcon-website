<div class="mx-auto my-12 w-full px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <ol
        class="grid grid-cols-[auto_repeat(1,_1fr)] gap-4 lg:grid-cols-[auto_repeat(3,_1fr)]"
    >
        @foreach ($schedule->days as $day)
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
                            "{$session->theme}" => ! $session->isPlenumSession,
                            "border-l-8 p-2",
                            "col-start-2 lg:col-start-auto",
                        ])
                    >
                        <div>
                            <button
                                @class(["cursor-pointer text-left font-bold leading-none", "hover:text-wave-purple" => $session->description])
                                @if($session->description) dialog @endif
                            >
                                {{ $session->title }}
                            </button>
                            <button
                                class="favourite hidden"
                                data-session-id="{{ $session->id }}"
                            >
                                Star
                            </button>
                            <x-schedule.dialog :session="$session" />
                        </div>

                        <ul>
                            {{ $session->speakers->pluck("fullName")->join(", ") }}
                        </ul>
                    </li>
                @endforeach
            @endforeach
        @endforeach
    </ol>
</div>
