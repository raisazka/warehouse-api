<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name' => 'Ah Yao',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Ben',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Xiao Pin',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Jeffery',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Ah Wai',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Pandi',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Palani Kumar',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'vela',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Kanan',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Sanjoy',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Syafiqul',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Emeran',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Khan',
            'position' => 'installer',
        ]);

        DB::table('staff')->insert([
            'name' => 'Manuel',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Rico',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Tazul',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Mohern',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Ali',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Juyel',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Marsud',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Mamun',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Nazmul',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Farid',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Younus',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Delowar',
            'position' => 'worker',
        ]);

        DB::table('staff')->insert([
            'name' => 'Kuruni',
            'position' => 'worker',
        ]);
    }
}
