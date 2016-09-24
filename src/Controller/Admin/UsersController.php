<?php

namespace KingLoui\BaseKitUsers\Controller\Admin;

use CakeDC\Users\Controller\AppController;
use CakeDC\Users\Controller\Component\UsersAuthComponent;
use CakeDC\Users\Controller\Traits\SimpleCrudTrait;
use CakeDC\Users\Model\Table\UsersTable;
use Cake\Core\Configure;
use Cake\ORM\Table;

/**
 * Users Controller
 *
 * @property UsersTable $Users
 */
class UsersController extends AppController
{
    use SimpleCrudTrait;
}
