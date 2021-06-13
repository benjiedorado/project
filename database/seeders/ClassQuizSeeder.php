<?php

namespace Database\Seeders;

use App\Models\ClassQuiz;
use Illuminate\Database\Seeder;

class ClassQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassQuiz::factory(50)->create();
    }
}
