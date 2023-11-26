<?php

namespace App\Data\Sessions;

use Illuminate\Support\Collection;

class TimeSlot
{
    /*
     * @param Carbon $date
     * @param Session[] $sessions
     */
    public function __construct(
        public string $time,
        public Collection $sessions
    ) {
        //
    }

    static function fromSessionize(array $data): self
    {
        return new self(
            $data["slotStart"],
            collect($data["rooms"])->map(fn (array $room) => Session::fromSessionize($room)),
        );
    }
}
