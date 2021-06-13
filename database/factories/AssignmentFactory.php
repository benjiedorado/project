<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assignment;

class AssignmentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Assignment::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'floc' => $this->faker->word,
            'fdatein' => $this->faker->word,
            'desc' => $this->faker->word,
            'title' => $this->faker->word,
            'teacher_id' => $this->faker->randomNumber(1,5),
            'class_id' => $this->faker->randomNumber(1,5),
            'fname' => $this->faker->word,
        ];
    }
}
