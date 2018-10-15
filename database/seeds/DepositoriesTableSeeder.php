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
            ['name' => '本社4F'],
            ['name' => '本社4F キャビネット(A31)'],
            ['name' => '本社4F キャビネット(C22)'],
            ['name' => '本社7F'],
            ['name' => '本社7Fキャビネット(D11)'],
            ['name' => 'LCMセンター'],
            ['name' => '大阪事業所'],
            ['name' => '顧客先'],
            ['name' => '自宅'],
         ]);
    }
}
