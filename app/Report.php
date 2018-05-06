<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * Get the dashboards that are associated with the report.
     */
    public function dashboards()
    {
        return $this->belongsToMany('App\Dashboards')->withTimestamps();
    }
}
