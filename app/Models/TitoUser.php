<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class TitoUser implements Authenticatable
{
    public string $id;

    public string $slug;

    public string $email;

    public string $reference;

    public string $name;

    public function __construct(array $attributes)
    {
        $this->id = $attributes['id'];
        $this->slug = $attributes['slug'];
        $this->email = $attributes['email'];
        $this->reference = $attributes['reference'];
        $this->name = $attributes['name'];
    }

    public function getAuthIdentifierName(): string
    {
        return 'reference';
    }

    public function getAuthIdentifier(): string
    {
        return $this->reference;
    }

    public function getAuthPassword(): string
    {
        return '';
    }

    public function getRememberToken(): string
    {
        return '';
    }

    public function setRememberToken($value): void
    {
    }

    public function getRememberTokenName(): string
    {
        return '';
    }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'email' => $this->email,
            'reference' => $this->reference,
            'name' => $this->name,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->slug = $data['slug'];
        $this->email = $data['email'];
        $this->reference = $data['reference'];
        $this->name = $data['name'];
    }
}
