<?php

use Illuminate\Database\Seeder;

class OfficeInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('office_info')->insert([
            ['name' =>'Office 2013 Standard 32bit'],
            ['name' =>'Microsoft Office Home and Business プラスOffice365サービス'],
            ['office_licenses_id' => '1'],
            ['office_licenses_id' => '2']

         ]);
    }
}
