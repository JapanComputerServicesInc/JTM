<?php

use Illuminate\Database\Seeder;

class TerminalManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('terminal_managements')->insert([
                ['approval_no' =>'IS31006',
                'pc_name' => 'J1NL1106Q2',
                'serial_no' => 'R9-5BXCE',
                'status_id'=>'1',
                'depositories_id' => '1',
                'hdd_id' =>'1',
                'cpu_id' =>'1',
                'os_id' =>'1',
                'memories_id'=>'1',
                'employees_id' =>'1',
                'office_informations_id' =>'1',
                'terminal_informations_id' =>'1'
                ],
                ['approval_no' =>'JT33001',
                'pc_name' => 'J1NS1110Q6',
                'serial_no' => '27544329 1000793',
                'status_id'=>'2',
                'depositories_id' => '2',
                'hdd_id' =>'2',
                'cpu_id' =>'2',
                'os_id' =>'2',
                'memories_id'=>'2',
                'employees_id' =>'2',
                'office_informations_id' =>'2',
                'terminal_informations_id' =>'2'
                ]
         ]);


    }
}
