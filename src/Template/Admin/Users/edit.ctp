<?php $this->assign('title', 'Edit user'); ?>
<?php
    $Users = ${$tableAlias};
?>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($Users); ?>
    <fieldset>
        <legend><?= __d('CakeDC/Users', 'Edit User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('role');
            echo $this->Form->input('token');
            echo $this->Form->input('token_expires');
            echo $this->Form->input('api_token');
            echo $this->Form->input('activation_date');
            echo $this->Form->input('tos_date');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__d('CakeDC/Users', 'Submit')) ?>
    <?= $this->Form->end() ?>
</div>
