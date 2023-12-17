<?php

namespace App\Data\Sessions;

use Illuminate\Support\Collection;

class Speakers
{
    /*
     * @param \App\Data\Sessions\Speaker[] $speakers
     */
    public function __construct(
        public Collection $list
    ) {
        //
    }

    static function fromSessionize(array $data): self
    {
        return new self(
            collect($data)
                ->map(fn (array $speaker) => Speaker::fromSessionize($speaker))
                ->filter(fn (Speaker $speaker) => $speaker->id && $speaker->fullName)
        );
    }
}
