<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; 

class UserController extends Controller
{
    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        // Validate the user input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'user', // Set the default role to 'user'
        ]);

        // Check if the user was created successfully
        if ($user) {
            Session::flash('User added successfully!'); // Use Alert::info to display an info message
        } else {
            Session::flash('User creation failed!'); // Use Alert::danger to display an error message
        }

        return redirect('/create-user'); // Redirect back to the create user page
    }
}
