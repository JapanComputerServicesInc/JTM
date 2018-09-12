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
             ['depository' => '本社4F キャビネット(C22)'],
             ['depository' => '本社4F'],
             ['depository' => '朝霞事業所'],
             ['depository' => '本社7F']
         ]);
    }
}
