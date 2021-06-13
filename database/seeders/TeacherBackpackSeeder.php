<?php

namespace Database\Seeders;

use App\Models\TeacherBackpack;
use Illuminate\Database\Seeder;

class TeacherBackpackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherBackpack::factory(50)->create();
    }
}
