<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ItemTypesTableSeeder::class);
        $this->call(WorkersTableSeeder::class);
        $this->call(InstallersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
    }
}
