# The Norfolk Developer's Conference Website

[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2Fec4d003f-591b-402e-9873-69e0db1afa2f%3Fdate%3D1%26commit%3D1&style=for-the-badge)](https://forge.laravel.com/servers/532338/sites/2195791)

## Installation and development

The website for [https://nordevcon.com](https://nordevcon.com), a Laravel application, hosted on Digital Ocean via Forge.

```
cp .env.example .env
composer install
./vendor/bin/sail up
```

Application collects Sponsor details from Airtable, so you will need to set a `AIRTABLE_API_KEY` in your `.env`

## Archive

-   2020 is in [`archive/2020`](../../../tree/archive/2020)
-   2022 is in [`archive/2022`](../../../tree/archive/2022)
-   2022 is in [`archive/2023`](../../../tree/archive/2023)
