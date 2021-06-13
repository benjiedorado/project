<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Message;

class MessageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Message::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'receiver_id' => $this->faker->randomNumber(1,50),
            'content' => $this->faker->text,
            'date_sended' => $this->faker->date(),
            'sender_id' => $this->faker->randomNumber(1,50),
            'receiver_name' => $this->faker->word,
            'sender_name' => $this->faker->word,
            'message_status' => $this->faker->word,
        ];
    }
}
