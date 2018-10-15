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
            ['name' => 'Windows 7 Professional 32bit'],
            ['name' => 'Windows 7 Professional 64bit'],
            ['name' => 'Windows 8 Professional 32bit'],
            ['name' => 'Windows 8 Professional 64bit'],
            ['name' => 'Windows 8 Pro 64bit'],
            ['name' => 'Windows 10 Professional 32bit'],
            ['name' => 'Windows 10 Professional 64bit'],
            ['name' => 'Windows 10 home 64bit'],
            ['name' => 'Windows 10 pro 64bit'],
            ['name' => 'Mac OS X'],
            ['name' => 'Mac OS Sierra'],
            ['name' => 'MacOS High Sierra'],
            ['name' => 'MacOS Mojave']
         ]);
    }
}
