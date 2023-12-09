<?php

namespace App\View\Components;

use App\Data\Timeline\TimelineItem;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Timeline extends Component
{
    public function render(): View
    {
        $timeline = collect([
            [
                "Workshop Day",
                "A day of workshops",
                "2024-02-14T09:00:00.000Z"
            ],
            [
                "Pre-Conference Social",
                "A day of workshops",
                "2024-02-14T17:30:00.000Z"
            ],
            [
                "Conference Day 1 - Registration Opens",
                "A day of workshops",
                "2024-02-15T11:00:00.000Z"
            ],
            [
                "Conference Social",
                "A day of workshops",
                "2024-02-15T17:30:00.000Z"
            ],
            [
                "Conference Day 2 - Registration Opens",
                "A day ",
                "2024-02-16T08:30:00.000Z"
            ],
            [
                "Conference Dinner",
                "A day of workshops",
                "2024-02-16T18:30:00.000Z"
            ],
        ])->map(fn ($item) => TimelineItem::make($item));

        return view('components.timeline', compact("timeline"));
    }
}
