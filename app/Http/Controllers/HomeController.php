<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorRequest;
use App\Services\Hubspot;
use App\Services\Sessionize;
use Illuminate\Http\RedirectResponse;
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

    public function sponsor(Request $request): View
    {
        return view("sponsor");
    }

    public function submitForm(SponsorRequest $request): RedirectResponse
    {
        $hubspot = Hubspot::submitForm(
            $request->validated('firstname'),
            $request->validated('lastname'),
            $request->validated('phone'),
            $request->validated('email')
        );

        if (! $hubspot->ok()) {
            return redirect()
                ->back()
                ->with('error', 'Unable to submit form, please contact us at conference@norfolkdevelopers.com');
        }

        return redirect()
            ->back()
            ->with('success', 'We have received your request, check you inbox for receipt and we\'ll be in touch shortly');

    }
}
