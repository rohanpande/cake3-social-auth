<?php 
use Cake\Core\Configure;

return [
    'HybridAuth' => [
        'providers' => [
            'Google' => [
                'enabled' => true,
                'keys' => [
                    'id' => '258369317341-q63vse5ppmn3et830mdjqnq6tdl623o6.apps.googleusercontent.com',
                    'secret' => 'uY9KhPXR49jQEJQeKd3RMNhv'
                ]
            ],
            'Facebook' => [
                'enabled' => true,
                'keys' => [
                    'id' => '1147036668671587',
                    'secret' => '007c6ca4658df50f52582b09401c55b3'
                ],
                'scope' => 'email, user_about_me, user_birthday, user_hometown'
            ],
            'Twitter' => [
                'enabled' => true,
                'keys' => [
                    'key' => 'K3lrXv8e1wdcfrbibohtrWV67',
                    'secret' => 'x2tA7jmb0z8ku6prz5iYeYozRo7c6eI8Fs3ydbo5GfC0pB8rR1'
                ],
                'includeEmail' => false // Only if your app is whitelisted by Twitter Support
            ]
        ],
        'debug_mode' => Configure::read('debug'),
        'debug_file' => LOGS . 'hybridauth.log',
    ]
];