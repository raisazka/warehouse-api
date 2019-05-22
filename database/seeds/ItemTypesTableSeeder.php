<?php

use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->insert([
            'item_type_name' => 'Shoes'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Clothes'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Pants'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Electronic'
        ]);
    }
}
