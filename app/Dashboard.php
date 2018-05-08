<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    /**
     * Get all dashboards that belong to the authenticated user.
     */
    public static function usersDashboards()
    {
        $result = [];

        foreach (Auth::user()->dashboards->load('reports') as $dashboard) {
            $result['dashboards/' . $dashboard->id] = $dashboard;
        }

        return $result;
    }

    /**
     * Get the user that owns the dashboard.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the reports that are associated with the dashboard.
     */
    public function reports()
    {
        return $this->belongsToMany('App\Report')->withTimestamps();
    }
}
