<?php $this->assign('title', 'Add user'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <?= $this->Form->create(${$tableAlias}, ['align' => [
                        'sm' => [
                            'left' => 2,
                            'middle' => 10,
                            'right' => 12
                        ],
                        'md' => [
                            'left' => 2,
                            'middle' => 10,
                            'right' => 4
                        ]
                    ]]); ?>
                    <?= $this->Form->input('username'); ?>
                    <?= $this->Form->input('email'); ?>
                    <?= $this->Form->input('password'); ?>
                    <?= $this->Form->input('first_name'); ?>
                    <?= $this->Form->input('last_name'); ?>
                    <?= $this->Form->input('active', ['type' => 'checkbox']); ?>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <?= $this->Form->submit('Save', ['class' => 'btn-primary']); ?>
                    </div>
                 <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>