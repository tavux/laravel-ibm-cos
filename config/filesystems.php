<?php

return [
    'ibm-cos' => [
        'driver' => 's3',
        'key' => env('IBM_COS_ACCESS_KEY_ID'),
        'secret' => env('IBM_COS_SECRET_ACCESS_KEY'),
        'region' => env('IBM_COS_DEFAULT_REGION'),
        'bucket' => env('IBM_COS_BUCKET'),
        'endpoint' => env('IBM_COS_ENDPOINT'),
    ],
];
