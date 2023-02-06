<?php
if (!function_exists('longDateFormat')) {
    function longDateFormat($date)
    {
        if (!$date) {
            return;
        }

        if (!$date instanceof Carbon\Carbon) {
            $date = new Carbon\Carbon($date);
        }

        return $date->format(config('settings.app.date_format', 'y-m-d') . ' ' . config('settings.app.time_format', 'h:i a'));
    }
}

if (!function_exists('get_avatar')) {
    function get_avatar($str)
    {
        $str = ucwords(strtolower($str));
        $acronym = $word = '';
        $words = preg_split("/(\s|\-|\.)/", $str);
        foreach ($words as $w) {
            $acronym .= substr($w, 0, 1);
        }
        $word = $word . $acronym;
        return $word;
    }
}
