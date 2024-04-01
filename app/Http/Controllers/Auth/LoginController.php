<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   // use AuthenticatesUsers;
    // Show the login form
    public function showLoginForm()
    {
        //return "Hello world";
        return view('auth.login'); 
    }

    protected function authenticated(Request $request, $user)
    {
        session()->flash('helloMessage', "You're logged in as {$user->name}.");
        // Redirect to the intended page or default to home
        return redirect()->intended($this->redirectPath());
    }

    // Handle the login request
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Authentication was successful
            return redirect()->intended('/'); // Redirect to home page or another page
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Validate the login request
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    // Handle the logout request
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/'); // Redirect to the home page or login page
    }
}
