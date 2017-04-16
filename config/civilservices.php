<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Civil Services API Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for Civil Services API
    |
    */

    'api_base' => env('CIVIL_SERVICES_API_BASE', 'https://api.civil.services/v1'),
    'api_version' => env('CIVIL_SERVICES_API_VERSION', 'v1'),
    'api_key' => env('CIVIL_SERVICES_API_KEY', 'FFE7F65D-4123-A4A4-411A-C7432322F552'),
    'cache_expire' => env('CIVIL_SERVICES_CACHE_EXPIRE', 3600)
];
