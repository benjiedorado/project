<?php

namespace Database\Seeders;

use App\Models\TeacherClass;
use Illuminate\Database\Seeder;

class TeacherClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherClass::factory(5)->create();
    }
}
