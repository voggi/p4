<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(DashboardsTableSeeder::class);
        $this->call(DashboardReportTableSeeder::class);
    }
}
