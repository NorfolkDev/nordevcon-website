<?php

return [
    'thursday' => [
        'name' => 'Thursday Ticket',
        'description' => 'Join us on Thursday for our Development Day, three tracks of talks on frontend, backend, devops, future trends and much more!',
        'features' => [
            'Frontend & Backend Development',
            'DevOps & Future Trends',
            'Technical Tracks',
        ],
        'tiers' => [
            [
                'name' => 'Super Early Bird',
                'price' => 36,
                'rrp' => 120,
                'ends_at' => '2025-09-08 23:59:59',
            ],
            [
                'name' => 'Early Bird',
                'price' => 72,
                'rrp' => 120,
                'ends_at' => '2026-01-19 23:59:59',
            ],
            [
                'name' => 'Commercial',
                'price' => 120,
                'rrp' => null,
                'ends_at' => null,
            ],
        ],
    ],
    'friday' => [
        'name' => 'Friday Ticket',
        'description' => 'Join us on Friday for our Hybrid Day! Development, business, wellbeing, career & Panels.',
        'features' => [
            'Software Development',
            'Career & Wellbeing',
            'Business & Panels',
        ],
        'tiers' => [
            [
                'name' => 'Super Early Bird',
                'price' => 63,
                'rrp' => 210,
                'ends_at' => '2025-09-08 23:59:59',
            ],
            [
                'name' => 'Early Bird',
                'price' => 126,
                'rrp' => 210,
                'ends_at' => '2026-01-19 23:59:59',
            ],
            [
                'name' => 'Commercial',
                'price' => 210,
                'rrp' => null,
                'ends_at' => null,
            ],
        ],
    ],
    'full' => [
        'name' => 'Full Ticket',
        'description' => 'Join us for both Thursday and Friday sessions, and the Wednesday & Thursday networking events.',
        'features' => [
            'Access to both days',
            'Wednesday Networking',
            'Thursday Networking',
        ],
        'tiers' => [
            [
                'name' => 'Super Early Bird',
                'price' => 90,
                'rrp' => 300,
                'ends_at' => '2025-09-08 23:59:59',
            ],
            [
                'name' => 'Early Bird',
                'price' => 180,
                'rrp' => 300,
                'ends_at' => '2026-01-19 23:59:59',
            ],
            [
                'name' => 'Commercial',
                'price' => 300,
                'rrp' => null,
                'ends_at' => null,
            ],
        ],
    ],
];
