<?php

namespace Database\Seeders;

use App\Models\StudentBackpack;
use Illuminate\Database\Seeder;

class StudentBackpackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentBackpack::factory(50)->create();
    }
}
