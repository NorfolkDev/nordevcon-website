<?php

namespace App\View\Components;

use App\Services\Sessionize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Speakers extends Component
{
    public function render(): View|Closure|string
    {
        $speakers = Sessionize::getSpeakers();

        return view('components.speakers', compact("speakers"));
    }
}
