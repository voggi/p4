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

        foreach (Auth::user()->dashboards as $dashboard) {
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
}
