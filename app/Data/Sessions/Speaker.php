<?php

namespace App\Data\Sessions;

use Illuminate\Support\Facades\Vite;

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
            $data["profilePicture"] ?: Vite::asset("resources/img/avatar.png"),
            $data["keynote"] ?? "",
        );
    }
}
