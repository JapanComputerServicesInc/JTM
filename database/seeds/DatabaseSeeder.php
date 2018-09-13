<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CpuTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(DepositoriesTableSeeder::class);
        $this->call(HddTableSeeder::class);
        $this->call(MemoriesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(OfficeLicenseTableSeeder::class);
        $this->call(OfficeInfomationsTableSeeder::class);
        $this->call(OsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(TerminalInfomationsTableSeeder::class);
        $this->call(TerminalManagementsTableSeeder::class);
    }
}
