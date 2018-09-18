<?php

use Illuminate\Database\Seeder;

class OfficeInformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('office_informations')->insert([
            ['name' =>'Office 2013 Standard 32bit','office_licenses_id' => '1'],
            ['name' =>'Microsoft Office Home and Business プラスOffice365サービス','office_licenses_id' => '2']

         ]);
    }
}
