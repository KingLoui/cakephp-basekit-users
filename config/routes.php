<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Kingloui/BasekitUsers',
    ['path' => '/basekit-users'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);

Router::prefix('admin', function ($routes) {
    $routes->connect('/users', 
        ['prefix' => 'admin','plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'index']
    );
    $routes->connect('/users/:action/*', 
        ['prefix' => 'admin','plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users']
    );
    $routes->fallbacks(DashedRoute::class);
});

Router::connect('/users', 
    ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'index']);
Router::connect('/users/:action/*', 
    ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users']);
Router::connect('/profile/*', 
    ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'profile']);
Router::connect('/login', 
    ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'login']);
Router::connect('/logout', 
    ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'logout']);