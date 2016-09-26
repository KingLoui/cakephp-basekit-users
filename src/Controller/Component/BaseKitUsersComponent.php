<?php

namespace KingLoui\BaseKitUsers\Controller\Component;

use Cake\Controller\Component;

class BaseKitUsersComponent extends Component
{
    public function initialize(array $config) {
    	$controller = $this->_registry->getController();

    	$controller->loadComponent('CakeDC/Users.UsersAuth');
    }
}