<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @dump($schedule)
    <ol class="grid lg:grid-cols-[auto_repeat(3,_1fr)]">
        @foreach ($schedule->days as $day)
            @foreach ($day->timeSlots as $timeSlot)
                <li>{{ $timeSlot->time }}</li>

                @foreach ($timeSlot->sessions as $session)
                    <li
                        @class([
                            "lg:col-span-3" => $session->isPlenumSession,
                            "lg:row-span-2" => $session->duration === 90,
                            "py-6" => ! $session->isPlenumSession,
                            "border-b border-slate-400 p-2",
                        ])
                    >
                        {{ $session->title }}
                        <dialog>
                            {{ $session->description }}
                            <form>
                                <button
                                    type="submit"
                                    aria-label="close"
                                    formmethod="dialog"
                                    formnovalidate
                                >
                                    X
                                </button>
                            </form>
                        </dialog>
                        <button dialog>More</button>
                    </li>
                @endforeach
            @endforeach
        @endforeach
    </ol>
</div>
