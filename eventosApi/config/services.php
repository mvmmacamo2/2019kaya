<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'twitter' => [
        'client_id' => 'dqOnWERqMm2epHAGLYAZH7tPs',
        'client_secret' => 'aAOeCaRVq63RBSvfpPv544MYi47iSrOcKLsjMPUuJw8sTBJaBN',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

    'facebook' => [
        'client_id' => '1622996907808396',
        'client_secret' => '82693122fc6a30edddc0db4dbd6651b9',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '644574870996-tuu4epjnf4fggg4hlu1hdb1tepka87r6.apps.googleusercontent.com',
        'client_secret' => '_KpjWt35WbBUw6QobTPRr062',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
