<?php 
    $user = $this->request->session()->read('Auth.User');
?>
<ul class="nav navbar-top-links navbar-right">
    <li>
        <span class="m-r-sm text-muted welcome-message">Welcome <?= $user['first_name'] ?>  <?= $user['last_name'] ?>!</span>
    </li>
    <li>
        <a href="<?= $this->Url->build(['prefix' => false, 'plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'logout']); ?>">
            <i class="fa fa-sign-out"></i> Log out
        </a>
    </li>
</ul>