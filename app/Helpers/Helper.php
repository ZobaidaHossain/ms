<?php

// Translate function to switch between English and Bangla based on session locale
if (!function_exists('translate')) {
    function translate( $bangla,$english)
    {
        return (session()->has('locale') && session()->get('locale') === 'en') ? $english : $bangla;
    }
}
