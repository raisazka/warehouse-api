<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rais',
            'email' => 'raisazka@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Yosef',
            'email' => 'yosef@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'user2'
        ]);

        DB::table('users')->insert([
            'name' => 'Azka',
            'email' => 'azka@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'user3'
        ]);
    }
}
