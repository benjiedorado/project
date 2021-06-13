<?php

namespace Database\Seeders;

use App\Models\TeacherNotification;
use Illuminate\Database\Seeder;

class TeacherNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherNotification::factory(50)->create();
    }
}
