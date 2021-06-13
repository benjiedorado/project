<?php

namespace Database\Seeders;

use App\Models\StudentAssignment;
use Illuminate\Database\Seeder;

class StudentAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentAssignment::factory(50)->create();
    }
}
