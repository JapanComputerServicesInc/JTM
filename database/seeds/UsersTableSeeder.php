<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'hoshino',
           'email' => 'hoshino_h@japacom.co.jp',
           'password' => bcrypt('secret'),
       ]);
    }
}
