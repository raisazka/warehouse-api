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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'User 2',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'user2'
        ]);

        DB::table('users')->insert([
            'name' => 'User 3',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('1234567'),
            'role' => 'user3'
        ]);
    }
}
