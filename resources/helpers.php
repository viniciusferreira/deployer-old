<?php

if (!function_exists('slug')) {
    function slug($title, $separator = '-')
    {
        $Str = app('Illuminate\Support\Str');
        
        return $Str->slug($title, $separator);
    }
}
