<?php

use Illuminate\Database\Seeder;

class StockOutDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_out_details')->insert([
            'stock_out_id' => 1,
            'item_id' => 1,
            'qty' => 3,
            'remarks' => 'Mantul'
        ]);

        DB::table('stock_out_details')->insert([
            'stock_out_id' => 1,
            'item_id' => 3,
            'qty' => 1,
            'remarks' => 'Ok'
        ]);

        DB::table('stock_out_details')->insert([
            'stock_out_id' => 1,
            'item_id' => 4,
            'qty' => 2,
            'remarks' => null
        ]);
    }
}
