<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherBackpack;

class TeacherBackpackFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TeacherBackpack::class;

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
            'teacher_id' => $this->faker->randomNumber(1,50),
            'fname' => $this->faker->word,
        ];
    }
}
