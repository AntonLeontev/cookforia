<?php

return [

    'ya_captcha' => [
        'server_key' => env('YANDEX_CAPTCHA_SERVER_KEY'),
        'client_key' => env('YANDEX_CAPTCHA_CLIENT_KEY'),
    ],

    'google' => [
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'client_id' => env('GOOGLE_CLIENT_ID'),
    ],

];
