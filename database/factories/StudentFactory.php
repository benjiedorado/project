<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Student::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [

            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'class_id' => $this->faker->randomNumber(1,5),
            'username' => $this->faker->userName,
            'password' => bcrypt($this->faker->password),
            'location' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}
