<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach ($sessions as $day)
        <h3>{{ $day["date"] }}</h3>

        <ol class="grid grid-cols-3">
            @foreach ($day["timeSlots"] as $timeSlot)
                @foreach ($timeSlot["rooms"] as $session)
                    <li
                        @class([
                            "col-span-3" => $session["session"]["isPlenumSession"],
                            "py-6" => ! $session["session"]["isPlenumSession"],
                            "border-b border-slate-400 p-2",
                        ])
                    >
                        {{ $session["session"]["title"] }}
                        <dialog>
                            {{ $session["session"]["title"] }}
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
        </ol>
    @endforeach
</div>
