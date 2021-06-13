<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quiz;

class QuizFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Quiz::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'quiz_title' => $this->faker->text,
            'quiz_description' => $this->faker->text,
            'date_added' => $this->faker->word,
            'teacher_id' => $this->faker->randomNumber(1,50),
        ];
    }
}
