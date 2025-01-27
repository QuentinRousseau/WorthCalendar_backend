<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'web/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        '*', // Allow all origins
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
