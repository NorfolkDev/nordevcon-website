<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Promo Offer Modal
    |--------------------------------------------------------------------------
    |
    | The homepage offer popup. It only renders between starts_at and ends_at
    | (app timezone), so leave either null to keep it switched off.
     */

    'starts_at' => null,

    'ends_at' => null,

    'code' => 'oh-go-on-then',

    'url' => 'https://ti.to/norfolkdevelopers/nordevcon-27/discount/oh-go-on-then',

    'headline' => 'Missed our Early Bird offers?..',

    'title' => "Don't miss out on this opportunity to get 40% off TODAY!",

    // Shown above the title on the final day of the offer
    'last_day_title' => 'OFFER ENDS TODAY!',

    'message' => "Join hundreds of developers elevate their skills with workshops, keynote sessions, and networking events. Whether you're a seasoned professional or just starting out, there's something for everyone!",

    'reasons_title' => 'Why Attend nor(DEV): con?',

    'reasons' => [
        'Expert Speakers: Learn from industry leaders and innovators.',
        'Hands-On Workshops: Gain practical experience with the latest technologies.',
        'Networking Opportunities: Connect with peers, mentors, and potential employers.',
        'Access to Exclusive Resources: Receive materials and recordings post-conference.',
    ],

    'code_prefix' => 'Use Promo Code:',

    'code_suffix' => 'at checkout to receive 40% off your ticket!',

    'accept_label' => 'Oh, go on then!',

    'dismiss_label' => "Don't bother me with your offers!",
];
