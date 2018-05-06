<?php

namespace App\Http\Controllers;

use Auth;
use App\Report;
use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboards = Dashboard::usersDashboards();

        return view('dashboards.index', compact('dashboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dashboards = Dashboard::usersDashboards();

        return view('dashboards.create', compact('dashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $dashboard = new Dashboard();

        $dashboard->name = $request->name;

        $dashboard->user()->associate(Auth::user());

        $dashboard->save();

        return redirect('/dashboards')->with(['You added' . $dashboard->name . ' to your dashboards. Click on Edit to select reports for it.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        $dashboards = Dashboard::usersDashboards();

        return view('dashboards.show', compact('dashboards', 'dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        $dashboards = Dashboard::usersDashboards();

        $reports = Report::all();

        $selectedReports = $dashboard->reports()->pluck('reports.id')->toArray();

        return view('dashboards.edit', compact('dashboards', 'reports', 'selectedReports', 'dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $dashboard->name = $request->name;

        $dashboard->reports()->sync($request->input('selection'));

        $dashboard->save();

        return redirect('/dashboards')->with(['Your changes to ' . $dashboard->name . ' were saved.']);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function delete(Dashboard $dashboard)
    {
        $dashboards = Dashboard::usersDashboards();

        return view('dashboards.delete', compact('dashboards', 'dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        $name = $dashboard->name;

        $dashboard->reports()->detach();

        $dashboard->delete();

        return redirect('/dashboards')->with(['You removed the dashboard ' . $name . '.']);
    }
}
