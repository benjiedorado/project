<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notification;

class NotificationFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Notification::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'teacher_class_id' => $this->faker->randomNumber(1,50),
            'notification' => $this->faker->word,
            'date_of_notification' => $this->faker->date(),
            'link' => $this->faker->word,
        ];
    }
}
