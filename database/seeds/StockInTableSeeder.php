<?php

use Illuminate\Database\Seeder;

class StockInTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 2,
            'qty' => 3,
            'remarks' => 'Oke',
            'created_at' => '2019-05-28'
        ]);

        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 3,
            'qty' => 2,
            'remarks' => 'Oke',
            'created_at' => '2019-05-29'
        ]);

        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 1,
            'qty' => 1,
            'remarks' => null,
            'created_at' => '2019-05-27'
        ]);

        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 5,
            'qty' => 4,
            'remarks' => 'Oke',
            'created_at' => '2019-05-25'
        ]);

        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 7,
            'qty' => 2,
            'remarks' => 'Gamasuk',
            'created_at' => '2019-05-23'
        ]);

        DB::table('stock_ins')->insert([
            'user_id' => 1,
            'item_id' => 6,
            'qty' => 2,
            'remarks' => 'Harusnya Gak Masuk',
            'created_at' => '2019-05-10'
        ]);
    }
}
