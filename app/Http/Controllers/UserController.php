<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile-show', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile-edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add other fields that you want to validate and update
        ]);

        $user->update($request->all());

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }

    public function deleteProfile()
    {
        $user = Auth::user();
        $user->delete();

        return redirect('/')->with('success', 'Profile deleted successfully.');
    }


}
