<?php

namespace App\Services;

use App\Data\Sessions\Schedule;
use App\Data\Sessions\Speakers;
use Error;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Sessionize
{
    public static function getSessions(?int $ttl = 10_800): Schedule
    {
        $data = Cache::remember('sessionize_sessions', $ttl, function () {
            $response = Http::get('https://sessionize.com/api/v2/6rdd3z2a/view/GridSmart');

            if (! $response->ok()) {
                throw new Error('Error getting sessions from Sessionize');
            }

            return $response->json();
        });

        $speakers = self::getSpeakers();

        return Schedule::fromSessionize($data, $speakers);
    }

    public static function getSpeakers(?int $ttl = 10_800): Speakers
    {
        $data = Cache::remember('sessionize_speakers', $ttl, function () {
            $response = Http::get('https://sessionize.com/api/v2/6rdd3z2a/view/Speakers');

            if (! $response->ok()) {
                throw new Error('Error getting speakers from Sessionize');
            }

            return $response->json();
        });

        return Speakers::fromSessionize($data);
    }
}
