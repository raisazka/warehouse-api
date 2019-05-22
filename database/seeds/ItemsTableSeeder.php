<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_type_id' => '3',
            'item_description' => 'Spongebob Pants',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 10
        ]);

        DB::table('items')->insert([
            'item_type_id' => '1',
            'item_description' => 'Spongebob Shoes',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 15
        ]);

        DB::table('items')->insert([
            'item_type_id' => '2',
            'item_description' => 'Spongebob Clothes',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 7
        ]);

        DB::table('items')->insert([
            'item_type_id' => '4',
            'item_description' => 'Spongebob Gadget',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 15
        ]);

        DB::table('items')->insert([
            'item_type_id' => '1',
            'item_description' => 'Patrick Shoes',
            'size' => 'L',
            'expiry_date' => '2019-10-05',
            'stock' => 11
        ]);

        DB::table('items')->insert([
            'item_type_id' => '2',
            'item_description' => 'Patrick Clothes',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 2
        ]);

        DB::table('items')->insert([
            'item_type_id' => '3',
            'item_description' => 'Patrick Pants',
            'size' => 'M',
            'expiry_date' => '2019-10-05',
            'stock' => 19
        ]);

        DB::table('items')->insert([
            'item_type_id' => '4',
            'item_description' => 'Patrick Phone',
            'size' => '2',
            'expiry_date' => '2019-10-05',
            'stock' => 3
        ]);
    }
}
