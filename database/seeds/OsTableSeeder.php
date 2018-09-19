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
             ['name' => 'Windows 7 Professional 64bit'],
             ['name' => 'Windows 7 Professional 32bit']
         ]);
    }
}
