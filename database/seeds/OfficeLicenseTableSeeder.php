<?php

use Illuminate\Database\Seeder;

class OfficeLicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('office_licenses')->insert([
             ['name' => 'ボリュームライセンス'],
             ['name' => 'OEM']            
         ]);
    }
}
