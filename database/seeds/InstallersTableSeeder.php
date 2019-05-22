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
            'installer_name' => 'Yusuf',
            'installer_pst' => 'Manager',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Aladin',
            'installer_pst' => 'Staff',
        ]);

        DB::table('installers')->insert([
            'installer_name' => 'Amil',
            'installer_pst' => 'Staff',
        ]);
    }
}
