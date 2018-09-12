<?php

use Illuminate\Database\Seeder;

class OsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('os')->insert([
             ['os' => 'Windows 7 Professional 64bit'],
             ['os' => 'Windows 7 Professional 32bit']
         ]);
    }
}
