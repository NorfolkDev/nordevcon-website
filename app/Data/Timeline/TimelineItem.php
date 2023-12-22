<?php

namespace App\Data\Timeline;

use Illuminate\Support\Carbon;

class TimelineItem
{
    public function __construct(
        public string $headline,
        public string $description,
        public Carbon $datetime,
        public ?string $href,
    ) {
    }

    static function make(array $data): self
    {
        return new self(
            $data[0],
            $data[1],
            Carbon::parse($data[2]),
            $data[3] ?? null
        );
    }
}
