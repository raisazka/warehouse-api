<?php

use Illuminate\Database\Seeder;

class StockOutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_outs')->insert([
            'user_id' => 1,
            'worker_id' => 2,
            'installer_id' => 1,
            'created_at' => '2019-05-24'
        ]);

        DB::table('stock_outs')->insert([
            'user_id' => 1,
            'worker_id' => 2,
            'installer_id' => 1,
            'created_at' => '2019-05-16'
        ]);
    }
}
