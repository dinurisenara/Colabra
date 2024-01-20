<?php

namespace App\Http\Controllers;
use App\Models\User;    

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function adminAddUser () {
        return view('users');
    }
    public function create() {
        return view('adminAddUser');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ])
        ;
        $newUser = User :: create($data);
        return redirect(route('admin.add.user'));
    }

    public function manageUsers () {
        $users = User::where('role', 'user')->get(); // Fetch users with 'user' role
    
        return view('adminManageUsers', compact('users'));
    }

    public function viewUserProfile ($id) {
        $user = User::findOrFail($id); 
        return view('adminUserProfileView' , compact('user'));
    }
}
