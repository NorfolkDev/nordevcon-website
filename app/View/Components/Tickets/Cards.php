<?php

namespace App\View\Components\Tickets;

use Illuminate\View\Component;
use Illuminate\Support\Carbon;

class Cards extends Component
{
    public $tickets;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tickets = $this->getTickets();
    }

    public function getTickets()
    {
        $config = config('tickets');
        if (!$config) {
            return [];
        }

        $now = Carbon::now();

        $processed = [];

        foreach ($config as $key => $ticket) {
            $activeTier = null;

            foreach ($ticket['tiers'] as $tier) {
                if ($tier['ends_at'] === null) {
                    $activeTier = $tier;
                    break;
                }

                if ($now->lte(Carbon::parse($tier['ends_at']))) {
                    $activeTier = $tier;
                    break;
                }
            }

            if ($activeTier) {
                $processed[$key] = array_merge($ticket, [
                    'price' => '£' . $activeTier['price'],
                    'rrp' => $activeTier['rrp'] ? '£' . $activeTier['rrp'] : null,
                    'tier_name' => $activeTier['name'],
                ]);
            }
        }

        return $processed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tickets.cards');
    }
}
