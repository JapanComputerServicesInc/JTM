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
             ['name' => '4GB'],
             ['name' => '2GB'],
             ['name' => '8GB'],
             ['name' => '16GB']
         ]);
    }
}
