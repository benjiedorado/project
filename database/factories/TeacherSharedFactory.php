<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherShared;

class TeacherSharedFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TeacherShared::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->randomNumber(1,50),
            'shared_teacher_id' => $this->faker->randomNumber(1,50),
            'floc' => $this->faker->word,
            'fdatein' => $this->faker->date(),
            'fdesc' => $this->faker->word,
            'fname' => $this->faker->word,
        ];
    }
}
