<?php

use Illuminate\Database\Seeder;

class CpuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
             ['cpu' => 'Corei3 370M(2.4GHz)'],
             ['cpu' => 'Corei5-2410M(2.3GHz)']
         ]);
    }
}
