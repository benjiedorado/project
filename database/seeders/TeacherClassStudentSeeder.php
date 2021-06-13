<?php

namespace Database\Seeders;

use App\Models\TeacherClassStudent;
use Illuminate\Database\Seeder;

class TeacherClassStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherClassStudent::factory(5)->create();
    }
}
