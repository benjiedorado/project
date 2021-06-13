<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherClassStudent;

class TeacherClassStudentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TeacherClassStudent::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_class_id' => $this->faker->randomNumber(1,5),
            'student_id' => $this->faker->randomNumber(1,5),
            'teacher_id' => $this->faker->randomNumber(1,5),
        ];
    }
}
