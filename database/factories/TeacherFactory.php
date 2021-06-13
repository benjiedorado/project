<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

class TeacherFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Teacher::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [

            'username' => $this->faker->userName,
            'password' => bcrypt($this->faker->password),
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'department_id' => $this->faker->randomNumber(1,50),
            'location' => $this->faker->word,
            'about' => $this->faker->word,
            'teacher_status' => $this->faker->word,
            'teacher_stat' => $this->faker->word,
        ];
    }
}
