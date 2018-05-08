<?php

use Illuminate\Database\Seeder;

class DashboardReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fundedStatus = App\Report::where('name', '=', 'Funded Status')->first();
        $fundingRatio = App\Report::where('name', '=', 'Funding Ratio')->first();
        $liabilityCashflows = App\Report::where('name', '=', 'Liability Cashflows')->first();
        $assetReturns = App\Report::where('name', '=', 'Asset Returns')->first();
        $assetAllocation = App\Report::where('name', '=', 'Asset Allocation')->first();
        $returnAttribution = App\Report::where('name', '=', 'Return Attribution')->first();

        foreach (App\User::all() as $user) {
            foreach ($user->dashboards as $dashboard) {
                if ($user->email === 'jill@harvard.edu' && $dashboard->name === 'Overview') {
                    $dashboard->reports()->save($fundedStatus);
                    $dashboard->reports()->save($fundingRatio);
                    $dashboard->reports()->save($assetReturns);
                } elseif ($user->email === 'jill@harvard.edu' && $dashboard->name === 'Liabilities') {
                    $dashboard->reports()->save($liabilityCashflows);
                } elseif ($user->email === 'jamal@harvard.edu' && $dashboard->name === 'Overview') {
                    $dashboard->reports()->save($fundingRatio);
                    $dashboard->reports()->save($assetReturns);
                } elseif ($user->email === 'jamal@harvard.edu' && $dashboard->name === 'Assets') {
                    $dashboard->reports()->save($assetAllocation);
                    $dashboard->reports()->save($returnAttribution);
                }
            }
        }
    }
}
