<?php

use Illuminate\Database\Seeder;

class DepositoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depositories')->insert([
             ['name' => '本社4F キャビネット(C22)'],
             ['name' => '本社4F'],
             ['name' => '朝霞事業所'],
             ['name' => '本社7F']
         ]);
    }
}
