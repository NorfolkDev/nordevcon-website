<?php

namespace App\Data\Sessions;

use Illuminate\Support\Carbon;

class Session
{
    public function __construct(
        public string $name,
        protected array $data
    ) {
        //
    }

    static function fromSessionize(array $data): self
    {
        $duration = Carbon::parse($data["session"]["endsAt"])->diffInMinutes(Carbon::parse($data["session"]["startsAt"]));

        return new self(
            $data["name"],
            [
                ...$data["session"],
                "duration" => $duration,
            ]
        );
    }

    public function __get(string $property)
    {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        }
    }
}
