<?php

namespace App\Data\Sponsors;

class Sponsor
{
    public function __construct(
        public string $name,
        public string $package,
        public ?string $description,
        public ?string $logo,
        public ?string $website,
        public ?string $twitter,
        public ?string $linkedIn,
    ) {
        //
    }

    public static function fromAirtable(array $data): self
    {
        return new self(
            $data['Organisation Name'],
            $data['Package'],
            $data['Description'] ?? null,
            $data['Logo'] ?? null,
            $data['Website'] ?? null,
            $data['Twitter'] ?? null,
            $data['LinkedIn'] ?? null,
        );
    }
}
