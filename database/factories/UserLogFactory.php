<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserLog;

class UserLogFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = UserLog::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'login_date' => $this->faker->date(),
            'logout_date' => $this->faker->date(),
            'user_id' => $this->faker->randomNumber(1,50),
        ];
    }
}
