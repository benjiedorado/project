<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StudentClassQuiz;

class StudentClassQuizFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = StudentClassQuiz::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'class_quiz_id' => $this->faker->randomNumber(1,50),
            'student_id' => $this->faker->randomNumber(1,50),
            'student_quiz_time' => $this->faker->word,
            'grade' => $this->faker->word,
        ];
    }
}
