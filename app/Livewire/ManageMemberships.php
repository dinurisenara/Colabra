<?php

namespace App\Livewire;

use App\Models\Membership_plans;
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


        return view('livewire.manage-memberships');
    }

    public function addMembership()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'spaceType' => 'required|string',
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
