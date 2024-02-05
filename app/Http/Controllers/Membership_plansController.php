<?php

namespace App\Http\Controllers;

use App\Http\Requests\Membership_plansRequest;
use App\Models\Membership_plans;
use App\Models\Space_types;

class Membership_plansController extends Controller
{
    public function index()
    {
        $membership_plans = Membership_plans::all();
        $spaceTypes = Space_types::all();
        return view('customer.customer-memberships' , compact('membership_plans' , 'spaceTypes'));
    }

    public function store(Membership_plansRequest $request)
    {
        return Membership_plans::create($request->validated());
    }

    public function show(Membership_plans $membership_plans)
    {
        return $membership_plans;
    }

    public function update(Membership_plansRequest $request, Membership_plans $membership_plans)
    {
        $membership_plans->update($request->validated());

        return $membership_plans;
    }

    public function destroy(Membership_plans $membership_plans)
    {
        $membership_plans->delete();

        return response()->json();
    }
}
