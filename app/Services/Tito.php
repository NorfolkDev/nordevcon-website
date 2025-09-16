<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Tito
{
    public static function getTicketByReference(string $reference): ?array
    {
        $data = self::getTickets();

        return collect($data)
            ->filter(fn (array $row) => $row['reference'] === $reference)
            ->first();
    }

    public static function getTicketBySlug(string $slug): ?array
    {
        $data = self::getTickets();

        return collect($data)
            ->filter(fn (array $row) => $row['slug'] === $slug)
            ->first();
    }

    protected static function getTickets(): ?array
    {
        $key = config('services.tito.key');
        $account = config('services.tito.account');
        $event = config('services.tito.event');
        $url = "https://api.tito.io/v3/$account/$event";

        $response = Http::withToken("token=$key", 'Token')->get("$url/tickets?page[size]=1000");

        if (! $response->ok()) {
            throw new \Error('Tito API request Failed');
        }

        $data = $response->json();

        if (array_key_exists('tickets', $data)) {
            return $response->json()['tickets'];
        }

        return null;
    }
}
