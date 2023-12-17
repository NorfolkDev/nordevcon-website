<?php

namespace App\Data\Sessions;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

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

    static function fromSessionize(array $data, Speakers $speakers): self
    {
        return new self(
            Str::replaceLast(":00", "", $data["slotStart"]),
            collect($data["rooms"])->map(fn (array $room) => Session::fromSessionize($room, $speakers)),
        );
    }
}
