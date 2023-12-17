<?php

namespace App\Data\Sessions;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class Day
{
    /*
     * @param Carbon $date
     * @param TimeSlot[] $timeSlots
     */
    public function __construct(
        public Carbon $date,
        public Collection $timeSlots
    ) {
        //
    }

    static function fromSessionize(array $data, Speakers $speakers): self
    {
        return new self(
            Carbon::parse($data["date"]),
            collect($data["timeSlots"])->map(fn (array $timeSlots) => TimeSlot::fromSessionize($timeSlots, $speakers))
        );
    }
}
