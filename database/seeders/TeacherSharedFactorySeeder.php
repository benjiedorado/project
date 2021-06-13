<?php

namespace Database\Seeders;

use App\Models\TeacherShared;
use Illuminate\Database\Seeder;

class TeacherSharedFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherShared::factory(50)->create();
    }
}
