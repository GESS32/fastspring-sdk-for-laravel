<?php

return [
    /**
     * FastSpring API credentials
     *
     * @see https://developer.fastspring.com/reference/getting-started-with-your-api#credentials
     */
    'auth' => [
        'login' => env('FASTSPRING_API_LOGIN'),
        'password' => env('FASTSPRING_API_PASSWORD'),
    ],
];
