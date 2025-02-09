<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    // Show login page
    public function index()
    {
        return view('pages.log-in');
    }

    // Handle login submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home'); // Redirect to home page after login
        }

        return back()->withErrors([
            'email' => 'Vale e-post või parool.',
        ])->onlyInput('email');
    }
}