<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherClassAnnouncements;

class TeacherClassAnnouncementsFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TeacherClassAnnouncements::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text,
            'teacher_id' => $this->faker->randomNumber(1,50),
            'teacher_class_id' => $this->faker->randomNumber(1,50),
            'date' => $this->faker->date(),
        ];
    }
}
