<?php

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            'warehouse_name' => 'warehouse-1'
        ]);

        DB::table('warehouses')->insert([
            'warehouse_name' => 'warehouse-2'
        ]);
    }
}
