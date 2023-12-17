<?php

namespace App\Data\Sessions;

use Illuminate\Support\Collection;

class Schedule
{
    /*
     * @param \App\Data\Sessions\Day[] $days
     */
    public function __construct(
        public Collection $days
    ) {
        //
    }

    static function fromSessionize(array $data): self
    {
        return new self(collect($data)->map(fn (array $dayData) => Day::fromSessionize($dayData)));
    }
}
