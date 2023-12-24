<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $user = User::create(request(['name', 'email', 'password']));

        // Validate the user
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        // Sign the user in
        auth()->login($user);

        // Redirect
        return redirect('/login');
    }
}
