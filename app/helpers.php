<?php

if (! function_exists('request_is_not_show')) {
    function request_is_not_show()
    {
        if (request()->is('dashboards')) {
            return true;
        } elseif (request()->is('dashboards/create')) {
            return true;
        } elseif (request()->is('dashboards/*') && request()->isMethod('put')) {
            return true;
        } elseif (request()->is('dashboards/*') && request()->isMethod('delete')) {
            return true;
        } elseif (request()->is('dashboards/*/delete')) {
            return true;
        } elseif (request()->is('dashboards/*/edit')) {
            return true;
        }

        return false;
    }
}
