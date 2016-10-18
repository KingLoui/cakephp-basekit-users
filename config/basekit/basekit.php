<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
	'BaseKit' => [
		'Menu' => [
			'AdminMenu' => [
				'Users' => [
						['uri' => '/admin/users', 'extras' => ['icon' => 'fa fa-user']],
						'List Users' => ['uri' => ['plugin' => 'KingLoui/BaseKitUsers','controller' => 'Users', 'action' => 'index']],
						'Add User' => ['uri' => ['plugin' => 'KingLoui/BaseKitUsers','controller' => 'Users', 'action' => 'add']]
				],
	    ]
		]
	]
];

return $config;
