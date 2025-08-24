<?php

namespace App\Services;

use App\Data\Sponsors\Sponsor;
use Error;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Airtable
{
    public static function getSponsors(?int $ttl = 10_800): Collection
    {
        if (app()->isLocal()) {
            $ttl = 0;
        }

        $data = Cache::remember('airtable_sponsors', $ttl, function () {
            $key = config('services.airtable.key');
            $id = config('services.airtable.id');
            $url = "https://api.airtable.com/v0/$id/Sponsors";

            $response = Http::withToken($key)->get($url);

            if (! $response->ok()) {
                return [];
                // throw new Error('Error getting sponsors from Airtable');
            }

            return $response->json()['records'];
        });

        return collect($data)
            ->pluck('fields')
            ->filter(fn (array $row) => $row['Status'] === 'Complete')
            ->map(fn (array $row) => Sponsor::fromAirtable($row));
    }
}
