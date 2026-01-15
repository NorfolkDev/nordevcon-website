<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Tickets extends Component
{
    public $offer;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->offer = $this->calculateOffer();
    }

    public function calculateOffer()
    {
        $tiers = config('tickets.full.tiers');

        if (!$tiers) {
            return null;
        }

        $now = Carbon::now();

        foreach ($tiers as $tier) {
            if ($tier['ends_at'] && $now->gt($tier['ends_at'])) {
                continue;
            }

            if ($tier['name'] === 'Commercial') {
                return null;
            }

            // Calculation for limited tiers
            $discount = round((($tier['rrp'] - $tier['price']) / $tier['rrp']) * 100 / 10) * 10;

            $icon = match ($tier['name']) {
                'Super Early Bird' => '🐤',
                'Early Bird' => '🐦',
                default => '🎟️'
            };

            $dateFormatted = Carbon::parse($tier['ends_at'])->format('jS F');

            return "{$discount}% off with our {$icon} {$tier['name']} tickets, available until {$dateFormatted}!";
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tickets');
    }
}

