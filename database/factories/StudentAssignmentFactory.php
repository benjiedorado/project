<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StudentAssignment;

class StudentAssignmentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = StudentAssignment::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'assignment_id' => $this->faker->randomNumber(1,50),
            'floc' => $this->faker->word,
            'assignment_fdatein' => $this->faker->word,
            'fdesc' => $this->faker->word,
            'fname' => $this->faker->word,
            'student_id' => $this->faker->randomNumber(1,50),
            'grade' => $this->faker->randomNumber(1,50),
        ];
    }
}
