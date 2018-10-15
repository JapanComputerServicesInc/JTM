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
            ['name' =>'Office 2003 Standard','office_licenses_id' => '2'],
            ['name' =>'Office 2003 Professional','office_licenses_id' => '2'],
            ['name' =>'Office 2010 Home and Bussiness 32bit','office_licenses_id' => '2'],
            ['name' =>'Office 2010 Professional 32bit','office_licenses_id' => '2'],
            ['name' =>'Office 2013 Standard 32bit','office_licenses_id' => '1'],
            ['name' =>'Office 2013 Home & Business Service Pack 1','office_licenses_id' => '2'],
            ['name' =>'Office 2013 Professional Plus 32bit','office_licenses_id' => '1'],
            ['name' =>'Office 2016 Standard 32bit','office_licenses_id' => '1'],
            ['name' =>'Office 2016 Professional 32bit','office_licenses_id' => '1'],
            ['name' =>'Office 365 Solo','office_licenses_id' => '2'],
            ['name' =>'Office 2016 Home & Business 64bit','office_licenses_id' => '2'],
            ['name' =>'Office 2016 Home & Student for Mac','office_licenses_id' => '1'],
            ['name' =>'Office 2016 Home & Business for Mac','office_licenses_id' => '1'],

         ]);
    }
}
