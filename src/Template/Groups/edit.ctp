<div class="row">
    <div class="col-xs-12">
        <div class="actions">
            <ul class="side-nav btn-group">
                <li class="btn btn-danger btn-sm"><?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $group->id],
                    ['confirm' => __('Are you sure you want to delete this {0}?', $group->id)]
                ) ?></li>
                <li class="btn btn-info btn-sm"><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
				<li class="btn btn-info btn-sm"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
				<li class="btn btn-info btn-sm"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="users form">
            <?= $this->Form->create($group, ['role' => 'form']) ?>
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Edit Group') ?></h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?php
						echo $this->Form->input('name', ['class' => 'form-control', 'placeholder' => __('Administrator')]);
                        ?>
                    </div>
                </div>
                <div class="box-footer">
                    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Cancel'), ['controller' => 'groups'], ['class' => 'btn btn-warning']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>