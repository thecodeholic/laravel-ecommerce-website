<?php

use Carbon\Carbon;

if (!function_exists('date_format')) {
    function date_format($date)
    {
        return Carbon::parse($date)->format(config('app.date_format'));
    }
}

if (!function_exists('datetime_format')) {
    function datetime_format($date)
    {
        return Carbon::parse($date)->format(config('app.datetime_format'));
    }
}

if (!function_exists('currency_format')) {
    function currency_format($price)
    {
        return config('app.currency_symbol') . number_format($price, 2);
    }
}
