<?php

use Illuminate\Database\Seeder;

class MemoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memories')->insert([
             ['name' => '4GB未満'],
             ['name' => '4GB以上'],
             ['name' => '8GB以上'],
             ['name' => '16GB以上']
         ]);
    }
}
