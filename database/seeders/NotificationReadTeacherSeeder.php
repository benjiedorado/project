<?php

namespace Database\Seeders;

use App\Models\NotificationReadTeacher;
use Illuminate\Database\Seeder;

class NotificationReadTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificationReadTeacher::factory(50)->create();
    }
}
