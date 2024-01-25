<?php

namespace Database\Factories;

use App\Models\Membership_plans;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Membership_plansFactory extends Factory
{
    protected $model = Membership_plans::class;

    public function definition(): array
    {
        return [
            'plan_name' => $this->faker->name(),
            'space_type' => $this->faker->word(),
            'customer_type' => $this->faker->word(),
            'time_period' => $this->faker->word(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
