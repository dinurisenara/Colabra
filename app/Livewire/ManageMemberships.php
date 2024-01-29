<?php

namespace App\Livewire;

use App\Models\Membership_plans;
use App\Models\Space_types;
use Livewire\Component;

/**
 * @method emit(string $string)
 */
class ManageMemberships extends Component
{
    public $name;
    public $spaceType;
    public $customerType;
    public $timePeriod;
    public $description;
    public $price;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $spaceTypes= Space_types::all();


        return view('livewire.manage-memberships',compact('spaceTypes'));
    }

    public function addMembership()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'spaceType' => 'required',
            'customerType' => 'required|string',
            'timePeriod' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

//        Membership_plans::create([
//            'plan_name' =>$validatedData->name,
//            'space_type' => $validatedData->spaceType,
//            'customer_type' => $validatedData->customerType,
//            'time_period' => $validatedData->timePeriod,
//            'description' => $validatedData->description,
//            'price' => $validatedData->price,
//
//        ]);
        $plan = new Membership_plans();
        $plan->plan_name = $this->name;
        $plan->space_type = $this->spaceType;
        $plan->customer_type = $this->customerType;
        $plan->time_period = $this->timePeriod;
        $plan->description = $this->description;
        $plan->price = $this->price;
        $plan->save();





        // Reset form fields
        $this->reset();

    }



}
