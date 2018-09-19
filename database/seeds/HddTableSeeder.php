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
             ['name' => '300GB'],
             ['name' => '250GB'],
             ['name' => '320GB'],
             ['name' => '500GB']
         ]);
    }
}
