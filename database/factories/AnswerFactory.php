<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Answer;

class AnswerFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Answer::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'quiz_question_id' => $this->faker->randomNumber(1,50),
            'answer_text' => $this->faker->text,
            'choices' => $this->faker->word,
        ];
    }
}
