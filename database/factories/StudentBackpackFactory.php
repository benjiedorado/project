<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StudentBackpack;

class StudentBackpackFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = StudentBackpack::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'floc' => $this->faker->word,
            'fdatein' => $this->faker->date(),
            'fdesc' => $this->faker->word,
            'student_id' => $this->faker->randomNumber(1,50),
            'fname' => $this->faker->word,
        ];
    }
}
