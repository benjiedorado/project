<?php

namespace Database\Seeders;

use App\Models\TeacherClassAnnouncements;
use Illuminate\Database\Seeder;

class TeacherClassAnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherClassAnnouncements::factory(50)->create();
    }
}
