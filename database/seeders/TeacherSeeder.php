<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\TeacherClass;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::factory(5)->create();
    }
}
