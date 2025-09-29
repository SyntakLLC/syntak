<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Prayer Times Location Detection Method
    |--------------------------------------------------------------------------
    |
    | This determines how the user's location is detected for prayer times.
    |
    | Supported: "ip", "geolocation"
    |
    | "ip" - Uses server-side IP geolocation (more reliable, less accurate)
    | "geolocation" - Uses browser geolocation API (more accurate, requires user permission)
    |
    */

    'location_method' => env('PRAYER_LOCATION_METHOD', 'ip'),

    /*
    |--------------------------------------------------------------------------
    | Prayer Times API Settings
    |--------------------------------------------------------------------------
    |
    | Configuration for the Islamic prayer times API.
    | We use the Aladhan API which is free and reliable.
    |
    */

    'api' => [
        'base_url' => 'http://api.aladhan.com/v1',
        'method' => 2, // University of Islamic Sciences, Karachi
        'school' => 0, // Shafi (or use 1 for Hanafi)
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Location
    |--------------------------------------------------------------------------
    |
    | Fallback location if detection fails
    |
    */

    'fallback_location' => [
        'latitude' => 40.7128,
        'longitude' => -74.0060,
        'city' => 'New York',
        'country' => 'United States',
    ],

    /*
    |--------------------------------------------------------------------------
    | IP Geolocation Service
    |--------------------------------------------------------------------------
    |
    | Service for IP-based location detection
    |
    */

    'ip_service' => [
        'url' => 'http://ip-api.com/json/',
        'fields' => 'status,message,country,city,lat,lon,timezone',
    ],

];
