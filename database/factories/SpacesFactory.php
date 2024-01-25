<?php

namespace Database\Factories;

use App\Models\Spaces;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SpacesFactory extends Factory
{
    protected $model = Spaces::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type_id' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
