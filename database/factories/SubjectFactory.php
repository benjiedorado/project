<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

class SubjectFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Subject::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'subject_code' => $this->faker->word,
            'subject_title' => $this->faker->word,
            'category' => $this->faker->word,
            'description' => $this->faker->text,
            'unit' => $this->faker->word,
            'Pre_req' => $this->faker->word,
            'semester' => $this->faker->word,
        ];
    }
}
