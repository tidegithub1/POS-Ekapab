<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'TiDE',
            'email' => 'tide@tide.com',
            'username' => 'Nongtide',
            'password' => '$2y$10$1Ps7/jp5225j4uzQTDfdFORmP7fdlBa82YOzkKci/PB7Pf4Y7UVqW', // password
            'remember_token' => Str::random(10)
        ]);
    }
}
