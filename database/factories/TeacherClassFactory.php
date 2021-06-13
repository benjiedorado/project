<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherClass;
use App\Models\Teacher;
use Illuminate\Support\Str;

class TeacherClassFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TeacherClass::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->randomNumber(1,5),
//            'teacher_id' => function() {
//                return factory(\App\Teacher::class)->create()->id;
//            },
            'class_id' => $this->faker->randomNumber(1,5),
            'subject_id' => $this->faker->randomNumber(1,5),
            'thumbnails' => $this->faker->word,
            'school_year' => $this->faker->word,
            'class_code' => $this->faker->word,
        ];
    }
}
