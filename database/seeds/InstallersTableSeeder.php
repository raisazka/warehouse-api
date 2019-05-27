<?php

use Illuminate\Database\Seeder;

class InstallersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('installers')->insert([
            'installer_name' => 'Ah Yao',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Ben',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Xiao Pin',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Jeffery',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Ah Wai',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Pandi',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Palani Kumar',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'vela',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Kanan',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Sanjoy',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Syafiqul',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Emeran',
            'installer_pst' => '-',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Khan',
            'installer_pst' => '-',
        ]);
    }
}
