<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            return redirect()->intended('/');
        }

        return $request->has('slug')
            ? back()->withErrors([
                'slug' => __('We were unable to login with that QR Code. Please try again, or use your email and ticket reference.'),
            ])
            : back()->withErrors([
                'email' => __('The provided credentials do not match our records.'),
            ])->onlyInput('email');
    }
}
