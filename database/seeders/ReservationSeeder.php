<?php

namespace Database\Seeders;

use App\Models\Reservations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed a sample reservation
        Reservations::create([
            'user_id' => 2, // Assuming user with ID 1 exists
            'space_type_id' => 1, // Assuming space type with ID 1 exists
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addHours(2),
            'status' => 'confirmed',
        ]);
    }
}
