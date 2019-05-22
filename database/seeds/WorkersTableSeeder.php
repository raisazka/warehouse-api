<?php

use Illuminate\Database\Seeder;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'worker_name' => 'Rais',
            'worker_pst' => 'Manager',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Yosef',
            'worker_pst' => 'Staff',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Wesley',
            'worker_pst' => 'Staff',
        ]);
    }
}
