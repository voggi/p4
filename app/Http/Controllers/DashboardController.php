<?php

namespace App\Http\Controllers;

use Auth;
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

        return redirect('/dashboards')->with(['You added' . $dashboard->name . ' to your dashboards. You can now add charts to it.']);
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

        return view('dashboards.edit', compact('dashboards', 'dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

        $dashboard->delete();

        return redirect('/dashboards')->with(['You removed the dashboard ' . $name . '.']);
    }
}
