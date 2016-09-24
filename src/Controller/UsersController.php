<?php

namespace KingLoui\BaseKitUsers\Controller;

use CakeDC\Users\Controller\AppController;
use CakeDC\Users\Controller\Component\UsersAuthComponent;
use CakeDC\Users\Controller\Traits\LoginTrait;
use CakeDC\Users\Controller\Traits\ProfileTrait;
use CakeDC\Users\Controller\Traits\ReCaptchaTrait;
use CakeDC\Users\Controller\Traits\RegisterTrait;
use CakeDC\Users\Controller\Traits\SocialTrait;
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
    use LoginTrait;
    use ProfileTrait;
    use ReCaptchaTrait;
    use RegisterTrait;
    use SocialTrait;
}
