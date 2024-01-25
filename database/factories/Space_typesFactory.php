<?php

namespace Database\Factories;

use App\Models\Space_types;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Space_typesFactory extends Factory
{
    protected $model = Space_types::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'capacity' => $this->faker->randomNumber(),
            'hourly_rate' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
