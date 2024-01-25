<?php

namespace Database\Factories;

use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingsFactory extends Factory
{
    protected $model = Bookings::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->word(),
            'space_id' => $this->faker->word(),
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now(),
            'price' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
