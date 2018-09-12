<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
             ['name' => 'IS'],
             ['name' => 'PA'],
             ['name' => 'SD'],
             ['name' => 'R&D'],
             ['name' => 'LCM'],
             ['name' => '営業'],
             ['name' => '管理'],
             ['name' => '経理'],
             ['name' => '業推']
         ]);
    }
}
