<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'        => 'Rudinei Rossales',
            'email'       => 'rudinei@gmail.com',
            'password'    => 123456,









       ]);
    }
}
