<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Offer extends Component
{
    public $offer;

    public $endsToday;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->offer = config('offer');
        $this->endsToday = $this->offer['ends_at'] && Carbon::parse($this->offer['ends_at'])->isToday();
    }

    /**
     * Only render while the offer window is open.
     */
    public function shouldRender(): bool
    {
        if (!$this->offer['starts_at'] || !$this->offer['ends_at'] || !$this->offer['code']) {
            return false;
        }

        return Carbon::now()->between($this->offer['starts_at'], $this->offer['ends_at']);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.offer');
    }
}
