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
        $this->call(StaffTableSeeder::class);
        $this->call(ItemTypesTableSeeder::class);
        $this->call(WarehousesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemWarehouse2TableSeeder::class);
    }
}
