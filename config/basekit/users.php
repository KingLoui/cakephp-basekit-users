<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    'Users' => [
        'table' => 'KingLoui/BaseKitUsers.Users'
    ],
    'Auth' => [
        'loginAction' => [
            'plugin' => 'KingLoui/BaseKitUsers',
            'controller' => 'Users',
            'action' => 'login',
            'prefix' => false
        ],
        'authorize' => [
            'CakeDC/Users.SimpleRbac' => [
                'autoload_config' => 'KingLoui/BaseKitUsers.basekit/permissions'
            ]
        ]
    ]
];

