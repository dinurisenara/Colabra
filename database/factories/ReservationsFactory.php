<?php

namespace Database\Factories;

use App\Models\Reservations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReservationsFactory extends Factory
{
    protected $model = Reservations::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->word(),
            'space_types_id' => $this->faker->word(),
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
