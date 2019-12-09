<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Homero Simpson',
            'email' => 'homero@mail.com',
            'password' => Hash::make('password')
        ]);

        $user->roles()->attach(1);
    }
}
