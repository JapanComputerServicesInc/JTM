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
             ['name' => '250GB未満'],
             ['name' => '250GB以上'],
             ['name' => '500GB以上'],
             ['name' => '1TB以上']
         ]);
    }
}
