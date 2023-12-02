<?php

namespace App\View\Components;

use App\Services\Airtable;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sponsors extends Component
{
    public function render(): View|Closure|string
    {
        $sponsors = Airtable::getSponsors();

        return view('components.sponsors', compact("sponsors"));
    }
}
