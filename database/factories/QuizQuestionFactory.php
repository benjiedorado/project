<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QuizQuestion;

class QuizQuestionFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = QuizQuestion::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'quiz_id' => $this->faker->randomNumber(1,50),
            'question_text' => $this->faker->text,
            'question_type_id' => $this->faker->randomNumber(1,50),
            'points' => $this->faker->randomNumber(1,50),
            'date_added' => $this->faker->word,
            'answer' => $this->faker->word,
        ];
    }
}
