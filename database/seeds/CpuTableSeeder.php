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
             ['name' => 'Corei3'],
             ['name' => 'Corei5'],
             ['name' => 'Corei7'],

         ]);
    }
}
