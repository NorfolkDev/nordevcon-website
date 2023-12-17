<?php

namespace App\View\Components;

use App\Services\Sessionize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public function render(): View|Closure|string
    {
        $speakerCount = Sessionize::getSpeakers()->list->count();

        return view('components.hero', compact("speakerCount"));
    }
}
