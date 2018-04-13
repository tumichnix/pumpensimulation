<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\User::class, 5)->create()->each(function ($user) {
        });
    }
}
