<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Hubspot
{
    public static function submitForm(string $firstname, string $lastname, string $phone, string $email): Response
    {
        return Http::post('https://api.hsforms.com/submissions/v3/integration/submit/144984026/0500fdfc-c45c-4598-88cc-7ae54cdd4cae', [
            "fields" => [
                [
                    "objectTypeId" =>  "0-1",
                    "name" =>  "firstname",
                    "value" =>  $firstname,
                ],
                [
                    "objectTypeId" =>  "0-1",
                    "name" => "lastname",
                    "value" =>  $lastname
                ],
                [
                    "objectTypeId" =>  "0-1",
                    "name" => "phone",
                    "value" =>  $phone
                ],
                [
                    "objectTypeId" =>  "0-1",
                    "name" => "email",
                    "value" =>  $email
                ]
            ],
            "context" => [
                "pageUri" => "https://nordevcon.com/sponsor",
                "pageName" => "Sponsor nor(DEV):con"
            ],
            "legalConsentOptions" => [
                "consent" => [
                    "consentToProcess" => true,
                    "text" => "I agree to allow Example Company to store and process my personal data.",
                    "communications" => [
                        [
                            "value" => true,
                            "subscriptionTypeId" => 999,
                            "text" => "I agree to receive marketing communications from Example Company."
                        ]
                    ]
                ]
            ]
        ]);
    }
}
