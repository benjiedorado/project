<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NotificationReadTeacher;

class NotificationReadTeacherFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = NotificationReadTeacher::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->randomNumber(1,50),
            'student_read' => $this->faker->word,
            'notification_id' => $this->faker->randomNumber(1,50),
        ];
    }
}
