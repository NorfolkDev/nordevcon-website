<?php

namespace App\Http\Controllers;

use App\Data\Timeline\TimelineItem;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function conference()
    {
        return view('conference');
    }

    public function attend()
    {
        return view('attend');
    }

    public function speak()
    {
        $timeline = collect([
            [
                'Call for Papers Closes',
                'All submissions must be in by this date.',
                '2025-10-24T00:00:00.000Z',
            ],
            [
                'Community Shortlisting',
                'A panel of 10 community members will evaluate all talks using comparison mode to generate a shortlist of potential sessions.',
                '2025-10-27T00:00:00.000Z',
            ],
            [
                'Schedule Curation',
                'Our core organising team will begin defining the conference schedule from the shortlist. This involves carefully balancing topics to ensure a wide range of content with minimal repetition.',
                '2025-11-03T00:00:00.000Z',
            ],
            [
                'Rolling Acceptances',
                'We will send the first wave of acceptances and rejections, followed by a second wave if necessary.',
                '2025-11-07T00:00:00.000Z',
            ],
            [
                'Final Notification',
                'The final schedule will be confirmed, and all remaining speakers who submitted a proposal will be notified.',
                '2025-11-17T00:00:00.000Z',
            ],
        ])->map(fn ($item) => TimelineItem::make($item));

        return view('speak', compact('timeline'));
    }
}
