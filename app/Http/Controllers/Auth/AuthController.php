<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember'); // Get remember value

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect to intended location or dashboard
            return redirect()->intended(route('dashboard'));
        }

        // Throw validation exception for failed login
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
}
