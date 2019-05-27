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
            'item_type_name' => 'CNC/KT/45 Degree'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Cutting Disk'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Chemical'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Temlate Usage'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Masking Tape'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Sand Paper'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Marble Glue'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Measurement'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Supporting Tools'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Sillicone'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Core Drill'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Finger Bits'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Electronic Finger Bits'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Water Boots'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Safety Shoes'
        ]);

        DB::table('item_types')->insert([
            'item_type_name' => 'Protection / Supporting'
        ]);
    }
}
