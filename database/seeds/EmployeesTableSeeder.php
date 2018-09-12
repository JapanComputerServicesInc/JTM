<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        ['name' =>'丸山一樹','departments_id' => '3'],
        ['name' =>'西田原麻生','departments_id' => '3']
        ]);

    }
}
