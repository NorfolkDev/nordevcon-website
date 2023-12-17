<?php

namespace App\Data\Sessions;

use Illuminate\Support\Carbon;

class Session
{
    const THEME = [
        "Main Auditorium" => "border-[#c53030]",
        "Conference Room 1" => "border-[#4299e1]",
        "Conference Room 2" => "border-[#68d391]",
    ];

    public function __construct(
        public string $name,
        protected array $data
    ) {
        //
    }

    static function fromSessionize(array $data, Speakers $speakers): self
    {
        $startsAt = Carbon::parse($data["session"]["startsAt"]);
        $endsAt = Carbon::parse($data["session"]["endsAt"]);
        $duration = $endsAt->diffInMinutes($startsAt);

        $speakerCollection = collect($data["session"]["speakers"])
            ->map(fn ($speakerData) => $speakers->list->first(fn ($speaker) => $speaker->id === $speakerData["id"]));

        return new self(
            $data["name"],
            [
                ...$data["session"],
                "startsAt" => $startsAt,
                "endsAt" => $endsAt,
                "duration" => $duration,
                "speakers" => $speakerCollection,
                "theme" => self::THEME[$data["session"]["room"]],
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
