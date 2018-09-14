<?php

use Illuminate\Database\Seeder;

class TerminalInformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terminal_informations')->insert([
        ['name' =>'ThinkPd X201i','model_number' => '3249MGJ','producer' => 'Lenovo'],
        ['name' =>'VPCEH1CGJ/B','model_number' => '1','producer' =>'Sony' ]
        ]);
    }
}
