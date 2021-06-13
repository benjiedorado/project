<?php

namespace Database\Seeders;

use App\Models\ClassSubjectOverview;
use Illuminate\Database\Seeder;

class ClassSubjectOverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassSubjectOverview::factory(50)->create();
    }
}
