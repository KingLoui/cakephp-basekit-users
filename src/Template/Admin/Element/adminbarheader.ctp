<?php 
	$user = $this->request->session()->read('Auth.User');
?>
<div class="dropdown profile-element">               
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
	        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $user['first_name'] ?> <?= $user['last_name'] ?></strong>
	         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
	<ul class="dropdown-menu animated fadeInRight m-t-xs">
	    <li><li><?= $this->Html->link('Profile', ['prefix' => false,'plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'profile']); ?></li></li>
	    <li class="divider"></li>
	    <li><?= $this->Html->link('Logout', ['prefix' => false,'plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'logout']); ?></li>
	</ul>
</div>