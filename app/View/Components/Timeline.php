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
                "A day of workshops, subscribe to our newsletter below to receive updates when these are announced. Full/Half day courses with industry veterans, on AI, 3D Modelling, and Game design.",
                "2024-02-14T09:00:00.000Z"
            ],
            [
                "Pre-Conference Social",
                "They say the \"corridor conference\" is the best part of any conference; meeting friends new & old! Networking is one of most powerful elements of both professional and personal life. Discuss the upcoming conference, debate your schedule, what you're looking forward to and are planning to see. What speakers are you most excited by?",
                "2024-02-14T17:30:00.000Z",
                "https://www.meetup.com/norfolk-developers-nordev/events/297337576/"
            ],
            [
                "Conference Day 1 - Registration Opens",
                "The first day of the conference; join us for nine sessions and two keynotes, deep diving into software development!",
                "2024-02-15T11:00:00.000Z"
            ],
            [
                "Conference Social",
                "Thursday evening, we'll move from the Kings Centre to the Last Pub Standing \"en mass\". A free bar, a BBQ, DJ, and a great opportunity to network with your fellows!",
                "2024-02-15T17:30:00.000Z",
                "https://www.meetup.com/norfolk-developers-nordev/events/297337629/"
            ],
            [
                "Conference Day 2 - Registration Opens",
                "The second day, a full day of talks! 6 sessions on software development, 3 panels, and 6 sessions on career & business growth",
                "2024-02-16T08:30:00.000Z"
            ],
            [
                "Conference Dinner",
                "A gourmet three-course meal with a wine reception. A great way to finish off the two days of learning; chat with fellows & network over some great food.",
                "2024-02-16T18:30:00.000Z",
                "https://ti.to/norfolkdevelopers/nordevcon-24/with/conference-dinner"
            ],
        ])->map(fn ($item) => TimelineItem::make($item));

        return view('components.timeline', compact("timeline"));
    }
}
