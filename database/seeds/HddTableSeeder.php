<?php

use Illuminate\Database\Seeder;

class HddTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hdd')->insert([
             ['hdd' => '300GB'],
             ['hdd' => '250GB'],
             ['hdd' => '320GB'],
             ['hdd' => '500GB']
         ]);
    }
}
