<?php

namespace App\Services;

use App\Data\Sessions\Schedule;
use Error;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Sessionize
{
    static function getSessions(): Schedule
    {
        $response = Http::get("https://sessionize.com/api/v2/6rdd3z2a/view/GridSmart");

        if (!$response->ok()) {
            throw new Error("Error getting sessions from Sessionize");
        }

        return Schedule::fromSessionize($response->json());
    }

    static function getSpeakers(): Collection
    {
        $response = Http::get("https://sessionize.com/api/v2/6rdd3z2a/view/Speakers");

        if (!$response->ok()) {
            throw new Error("Error getting speakers from Sessionize");
        }

        return collect($response->json());
    }
}
