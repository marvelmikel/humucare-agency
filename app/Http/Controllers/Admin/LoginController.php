<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('admin.login');

    }

public function login(Request $request)
{
    // Validate the input fields
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Get only the email and password from the request
    $credentials = $request->only('email', 'password');

    // Attempt to log in the user
    if (Auth::attempt($credentials)) {
        // Regenerate session to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect to intended page (defaults to dashboard)
        return redirect()->route('dashboard');
    }

    // Authentication failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

}
