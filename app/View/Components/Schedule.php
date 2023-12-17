<?php

namespace App\View\Components;

use App\Services\Sessionize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Schedule extends Component
{
    public function render(): View|Closure|string
    {
        $schedule = Sessionize::getSessions();

        return view('components.schedule', compact("schedule"));
    }
}
