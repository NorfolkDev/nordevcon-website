<?php

namespace App\Services;

use App\Data\Sponsors\Sponsor;
use Error;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Airtable
{
    static function getSponsors(): Collection
    {
        $data = Cache::remember("airtable_sponsors", 10_800, function () {
            $response = Http::withToken(config("services.airtable.key"))->get("https://api.airtable.com/v0/appThZp8te1uSNLKy/Sponsors");

            if (!$response->ok()) {
                throw new Error("Error getting sponsors from Airtable");
            }

            return $response->json()["records"];
        });

        return collect($data)
            ->pluck("fields")
            ->filter(fn (array $row) => $row["Status"] === "Complete")
            ->map(fn (array $row) => Sponsor::fromAirtable($row));
    }
}
