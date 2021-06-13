<?php

namespace Database\Seeders;

use App\Models\MessageSent;
use Illuminate\Database\Seeder;

class MessageSentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessageSent::factory(50)->create();
    }
}
