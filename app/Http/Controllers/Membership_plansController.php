<?php

namespace App\Http\Controllers;

use App\Http\Requests\Membership_plansRequest;
use App\Models\Membership_plans;

class Membership_plansController extends Controller
{
    public function index()
    {
        return Membership_plans::all();
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
