<?php

namespace App\Auth;

use App\Models\TitoUser;
use App\Services\Tito;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Cache;

class TitoUserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {
        $ticket = Cache::remember(
            "tito_user_$identifier",
            now()->addHours(1),
            fn () => Tito::getTicketByReference($identifier)
        );

        return $ticket ? new TitoUser($ticket) : null;
    }

    public function retrieveByToken($identifier, $token)
    {
        return null;
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        return null;
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (! empty($credentials['slug'])) {
            $ticket = Tito::getTicketBySlug($credentials['slug']);

            return $ticket ? new TitoUser($ticket) : null;
        }

        if (! empty($credentials['reference']) && ! empty($credentials['email'])) {
            $ticket = Tito::getTicketByReference($credentials['reference']);

            return $ticket ? new TitoUser($ticket) : null;
        }

        return null;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        if (! empty($credentials['slug'])) {
            return $credentials['slug'] === $user->slug;
        }

        if (! empty($credentials['email'])) {
            return $credentials['email'] === $user->email
                && $credentials['reference'] === $user->reference;
        }

        return false;
    }
}
