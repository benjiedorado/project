<?php

namespace Database\Seeders;

use App\Models\NotificationRead;
use Illuminate\Database\Seeder;

class NotificationReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificationRead::factory(50)->create();
    }
}
