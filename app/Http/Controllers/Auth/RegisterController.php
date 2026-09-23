<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

        public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        // Create a new user using the validated data
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the user in after registration
        auth()->login($user);

        // Redirect to the dashboard or any other page
        return redirect()->route('site.dashboard');
    }
}
