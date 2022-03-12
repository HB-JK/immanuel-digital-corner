<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Erick Chandra',
            'email' => 'erick@gmail.com',
            'password' => bcrypt('erick')
        ]);

        User::create([
            'name' => 'Rio',
            'email' => 'rio@gmail.com',
            'password' => bcrypt('rio')
        ]);
    }
}
