<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function create()
    {
        return view('auth.login');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }

    public function store()
    {
        // Validate the user
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        // Attempt to authenticate and log in the user
        if (auth()->attempt($attributes)) {
            // Redirect to the dashboard
            return redirect('/');
        }

        // Redirect back with a message
        return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }
}
