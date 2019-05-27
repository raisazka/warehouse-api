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
            'worker_name' => 'Manuel',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Rico',
            'worker_pst' => 'Aminur',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Tazul',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Mohern',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Ali',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Juyel',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Marsud',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Mamun',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Nazmul',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Farid',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Younus',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Delowar',
            'worker_pst' => '-',
        ]);

        DB::table('workers')->insert([
            'worker_name' => 'Kuruni',
            'worker_pst' => '-',
        ]);
    }
}
