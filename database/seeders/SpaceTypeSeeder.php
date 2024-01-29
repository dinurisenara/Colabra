<?php

namespace Database\Seeders;

use App\Models\Space_types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpaceType;

class SpaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Space_types::create([
            'type' => 'Meeting Room',
            'capacity' => 10,
            'hourly_rate' => 20.00,
            'customer_type' => 'Personal',
        ]);

        Space_types::create([
            'type' => 'Event Space',
            'capacity' => 50,
            'hourly_rate' => 30.00,
            'customer_type' => 'Business',
        ]);
        Space_types::create([
            'type' => 'Private Office ',
            'capacity' => 25,
            'hourly_rate' => 15.00,
            'customer_type' => 'Business',
        ]);

        Space_types::create([
            'type' => 'Conference Room',
            'capacity' => 15,
            'hourly_rate' => 25.00,
            'customer_type' => 'Business',
        ]);

        Space_types::create([
            'type' => 'Open Workspace',
            'capacity' => 30,
            'hourly_rate' => 10.00,
            'customer_type' => 'Personal',
        ]);

        Space_types::create([
            'type' => 'Personal Desk',
            'capacity' => 1,
            'hourly_rate' => 12.00,
            'customer_type' => 'Personal',
        ]);

        Space_types::create([
            'type' => 'Collaboration Space',
            'capacity' => 4,
            'hourly_rate' => 18.00,
            'customer_type' => 'Personal',
        ]);

        Space_types::create([
            'type' => 'Business Desk',
            'capacity' => 5,
            'hourly_rate' => 20.00,
            'customer_type' => 'Business',
        ]);
        //
    }
}
