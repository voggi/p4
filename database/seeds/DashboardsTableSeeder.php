<?php

use Illuminate\Database\Seeder;

class DashboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Dashboard::updateOrCreate([
            'name' => 'Overview',
            'user_id' => App\User::where('email', '=', 'jill@harvard.edu')->pluck('id')->first(),
        ]);

        App\Dashboard::updateOrCreate([
            'name' => 'Liabilities',
            'user_id' => App\User::where('email', '=', 'jill@harvard.edu')->pluck('id')->first(),
        ]);

        App\Dashboard::updateOrCreate([
            'name' => 'Overview',
            'user_id' => App\User::where('email', '=', 'jamal@harvard.edu')->pluck('id')->first(),
        ]);

        App\Dashboard::updateOrCreate([
            'name' => 'Assets',
            'user_id' => App\User::where('email', '=', 'jamal@harvard.edu')->pluck('id')->first(),
        ]);
    }
}
