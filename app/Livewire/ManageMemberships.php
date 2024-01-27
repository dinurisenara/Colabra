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

    public function render()
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

        Membership_plans::create([
            'plan_name' => $this->name,
            'space_type' => $this->spaceType,
            'customer_type' => $this->customerType,
            'time_period' => $this->timePeriod,
            'description' => $this->description,
            'price' => $this->price,

        ]);




        // Reset form fields
        $this->reset();

    }



}
