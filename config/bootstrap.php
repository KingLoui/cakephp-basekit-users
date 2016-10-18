<?php

use Cake\Core\Plugin;
use Cake\Core\Configure;

Configure::write('Users.config', ['KingLoui/BaseKitUsers.basekit/users']);
Plugin::load('CakeDC/Users', ['routes' => false, 'bootstrap' => true]);

Configure::load('KingLoui/BaseKitUsers.basekit/basekit');