<?php

namespace Database\Seeders;

use App\Models\Spaces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $spacesData = [
            ['name' => 'L1MR1', 'type_id' => 1],  // Level 1 Meeting Room 1
            ['name' => 'L2D23', 'type_id' => 4],  // Level 2 Desk 23 (Open Workspace)
            ['name' => 'L3CR2', 'type_id' => 3],  // Level 3 Conference Room 2
            ['name' => 'L4OS1', 'type_id' => 4],  // Level 4 Open Workspace 1
            ['name' => 'L5PD3', 'type_id' => 5],  // Level 5 Personal Desk 3
            ['name' => 'L6CS4', 'type_id' => 6],  // Level 6 Collaboration Space 4
            ['name' => 'L7MR3', 'type_id' => 1],  // Level 7 Meeting Room 3
            // Add more spaces with their corresponding type_id
            ['name' => 'L8OS2', 'type_id' => 4],  // Level 8 Open Workspace 2
            ['name' => 'L9PD4', 'type_id' => 5],  // Level 9 Personal Desk 4
            ['name' => 'L10MR4', 'type_id' => 1],  // Level 10 Meeting Room 4
            // ... add more spaces as needed
        ];
        //

        // Use the Eloquent ORM to insert data into the "spaces" table
        foreach ($spacesData as $spaceData) {
            Spaces::create($spaceData);
        }
    }
}
