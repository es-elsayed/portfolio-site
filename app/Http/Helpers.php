<?php
if (!function_exists('longDateFormat')) {
    function longDateFormat($date)
    {
        if (!$date) return;

        if (!$date instanceof Carbon\Carbon) {
            $date = new Carbon\Carbon($date);
        }

        return $date->format(config('settings.app.date_format', 'y-m-d') . ' ' . config('settings.app.time_format', 'h:i a'));
    }
}
