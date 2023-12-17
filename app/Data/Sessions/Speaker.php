<?php

namespace App\Data\Sessions;

class Speaker
{
    public function __construct(
        public string $id,
        public string $fullName,
        public ?string $bio,
        public ?string $tagline,
        public ?string $profilePictureUrl,
        public ?string $keynote,
    ) {
        //
    }

    static function fromSessionize(array $data): self
    {
        return new self(
            $data["id"] ?? "",
            $data["fullName"] ?? "",
            $data["bio"] ?? "",
            $data["tagLine"] ?? "",
            $data["profilePictureUrl"] ?? "",
            $data["keynote"] ?? "",
        );
    }
}
