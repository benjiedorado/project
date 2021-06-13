<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ClassQuiz;

class ClassQuizFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = ClassQuiz::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_class_id' => $this->faker->randomNumber(1,50),
            'quiz_time' => $this->faker->randomNumber(1,50),
            'quiz_id' => $this->faker->randomNumber(1,50),
        ];
    }
}
