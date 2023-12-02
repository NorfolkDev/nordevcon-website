<?php

namespace App\Services;

use App\Data\Sessions\Schedule;
use Error;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Sessionize
{
    static function getSessions(): Schedule
    {
        $data = Cache::remember("sessionize_sessions", 10_800, function () {
            $response = Http::get("https://sessionize.com/api/v2/6rdd3z2a/view/GridSmart");

            if (!$response->ok()) {
                throw new Error("Error getting sessions from Sessionize");
            }

            return $response->json();
        });

        return Schedule::fromSessionize($data);
    }

    static function getSpeakers(): Collection
    {
        $data = Cache::remember("sessionize_speakers", 10_800, function () {
            $response = Http::get("https://sessionize.com/api/v2/6rdd3z2a/view/Speakers");

            if (!$response->ok()) {
                throw new Error("Error getting speakers from Sessionize");
            }

            return $response->json();
        });

        return collect($data);
    }
}
