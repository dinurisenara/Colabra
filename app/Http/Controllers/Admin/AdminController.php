<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership_plans;
use App\Models\membershipPlans;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'customerType' => 'in:personal,business'
        ])
        ;
        $newUser = User :: create([
            'role_id' => 2, // default role is 'customer
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'customerType' => $data['customerType'],

        ]);
        return redirect(route('admin.add.user'));
    }

    public function manageUsers () {
        $users = User::where('role_id', '2')->get(); // Fetch users with '1' role

        return view('admin.adminManageUsers', compact('users'));
    }

    public function viewUserProfile ($id) {
        $user = User::findOrFail($id);
        return view('admin.adminUserProfileView' , compact('user'));
    }


    public function updateUser (Request $request, $id)
    {
        $user = User::findOrFail($id);


        // Validate the request if needed


        // Update the user attributes
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'customerType' => $request->customerType,
            'membership_id' => $request->membership_id,
        ]);

        return redirect()->back()->with('success', 'User updated successfully.');
    }



    public function create () {
        $membershipPlans = Membership_plans::all();
        return view('admin.adminManagememberships', compact('membershipPlans'));
    }
    public function storeplan(Request $request) {
        $data = $request->validate([
            'planName' => 'required',
            'customer_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'space_type' => 'required',
            'time_period' => 'required'


        ])
        ;
        $newMembership = Membership_plans :: create([
            'plan_name' => $data['plan_ame'],
            'customer_type' => $data['customer_type'],
            'description' => $data['description'],
            'price' => $data['price'],
            'space_type' => $data['space_type'],
            'time_period' => $data['time_period']

        ]);
        return redirect(route('admin.manage.memberships'));

    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => '1'], $request->remember)) {
            return redirect()->intended('/admin/dashboard'); // Redirect to admin dashboard
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Admin login failed.']);
    }

    public function viewMemberships()
    {
        $memberships = Membership_plans::all();
        return view('admin.viewmemberships', compact('memberships'));
    }

    public function editMembership($id)
    {
        // Logic to fetch membership details and load the edit view

        $membership = Membership_plans::findOrFail($id);

        return view('admin.edit-membership', compact('membership'));
    }

    public function deleteMembership($id)
    {
        // Logic to delete the membership
        Membership_plans::findOrFail($id)->delete();

        // Flash a success message to the session
        Session::flash('success', 'Membership deleted successfully.');

        // Redirect back to the view memberships page
        return redirect()->route('admin.view.memberships')->with('success', 'Membership deleted successfully.');
    }

    public function updateMembership(Request $request, $id)
    {
        $membership = Membership_plans::findOrFail($id);

        // Validate and update membership plan attributes based on the form data

        $membership->update([
            'plan_name' => $request->input('name'),
            // Update other attributes
        ]);

        return redirect()->route('admin.view.memberships')->with('success', 'Membership updated successfully.');
    }








}
