<?php

namespace App\Http\Controllers;

use App\Models\membershipPlans;
use Illuminate\Http\Request;

class membershipPlansController extends Controller
{
    //
    public function adminManageMemberships () {
        return view('memberships');
    }
    public function create () {
        $membershipPlans = membershipPlans::all();
        return view('adminManagememberships', compact('membershipPlans'));
    }
    public function store(Request $request) {
        $data = $request->validate([
            'planName' => 'required',
            'user_type' => 'in:personal,company',
            'planDescription' => 'required',
            'planPrice' => 'required'
            
        ])
        ;
        $newMembership = membershipPlans :: create($data);
        return redirect(route('admin.manage.memberships'));
       
    }


}
