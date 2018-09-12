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
             ['memory' => '4GB'],
             ['memory' => '2GB'],
             ['memory' => '8GB'],
             ['memory' => '16GB']
         ]);
    }
}
