<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    'Users' => [
        //Table used to manage users
        'table' => 'KingLoui/BaseKitUsers.Users'
    ],
    'Auth' => [
        'loginAction' => [
            'plugin' => 'KingLoui/BaseKitUsers',
            'controller' => 'Users',
            'action' => 'login',
            'prefix' => false
        ]
    ]
];

return $config;
