<?php

namespace App\Http\Controllers;

use App\Services\Sessionize;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view("home");
    }

    public function schedule(Request $request): View
    {
        $ids = Str::of($request->s)->explode(",");
        $sessions = Sessionize::getSessions()->days
            ->pluck("timeSlots")->flatten()
            ->pluck("sessions")->flatten()
            ->filter(fn ($session) => $ids->contains($session->id));

        return view("schedule", compact("sessions"));
    }

    public function volunteer(Request $request): View
    {
        return view("volunteer");
    }
}
