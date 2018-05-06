<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Report::updateOrCreate(['name' => 'Funded Status']);

        App\Report::updateOrCreate(['name' => 'Funding Ratio']);

        App\Report::updateOrCreate(['name' => 'Asset Performance']);

        App\Report::updateOrCreate(['name' => 'Asset Allocation']);

        App\Report::updateOrCreate(['name' => 'Return Attribution']);

        App\Report::updateOrCreate(['name' => 'Liability Cashflows']);
    }
}
