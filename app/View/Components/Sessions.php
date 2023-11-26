<?php

namespace App\View\Components;

use App\Services\Sessionize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sessions extends Component
{
    public function render(): View|Closure|string
    {
        $sessions = Sessionize::getSessions();

        return view('components.sessions', compact("sessions"));
    }
}
