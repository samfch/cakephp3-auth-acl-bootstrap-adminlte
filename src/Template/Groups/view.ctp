<div class="row">
    <div class="col-xs-12">
        <div class="actions">
            <ul class="side-nav btn-group">
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
                <li class="btn btn-danger btn-sm"><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
                <li class="btn btn-info btn-sm"><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
				<li class="btn btn-info btn-sm"><?= $this->Html->link(__('List Users'), ['controller'=> 'Users','action' => 'index']) ?> </li>
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('New User'), ['controller' => 'Users','action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="users view info-box">
            <div class="box box-info">
                <span class="info-box-icon bg-aqua">
                    <i class="fa fa-user"></i>
                </span>
                <div class="info-box-content">
                    <div class="box-header">
                        <h3 class="box-title"><?= h($group->name) ?></h3>
                    </div>
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt><?= __('Name') ?></dt>
                            <dd><?= h($group->name) ?></dd>
                            <dt><?= __('Id') ?></dt>
                            <dd><?= $this->Number->format($group->id) ?></dd>
                            <dt><?= __('Created') ?></dt>
                            <dd><?= h($group->created) ?></dd>
                            <dt><?= __('Modified') ?></dt>
                            <dd><?= h($group->modified) ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
		<div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($group->users)): ?>
		<div class="users index dataTable_wrapper table-responsive">
			<table id="dataTables-users" class="dataTable table table-striped table-bordered">
				<thead>
					<tr>
						<th><?= __('Id') ?></th>
						<th><?= __('Username') ?></th>
						<th><?= __('Group Id') ?></th>
						<th><?= __('Email') ?></th>
						<th><?= __('Name') ?></th>
						<th><?= __('Surname') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody class="ui-sortable">
				<?php $count = 0 ?>
				<?php foreach ($group->users as $users): ?>
				<tr id="<?= $users->id; ?>" class="<?= (++$count%2 ? 'odd' : 'even') ?>">
					<td><?= h($users->id) ?></td>
					<td><?= h($users->username) ?></td>
					<td>
						<?PHP if($users->has('group')) echo 'lol'; ?>							
						<?= $users->has('group') ? $this->Html->link($users->group->name, ['controller' => 'Groups', 'action' => 'view', $users->group->id]) : '' ?>
					</td>
					<td><?= h($users->email) ?></td>
					<td><?= h($users->name) ?></td>
					<td><?= h($users->surname) ?></td>
					<td><?= h($users->created) ?></td>
					<td><?= h($users->modified) ?></td>
					<td class="actions">
						<div class="btn-group">
							<?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-eye']), ['controller' => 'Users', 'action' => 'view', $users->id], ['escape' => false, 'title' => __('View'), 'class' => 'btn btn-info btn-xs']) ?>
							<?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-pencil']), ['controller' => 'Users', 'action' => 'edit', $users->id], ['escape' => false, 'title' => __('Edit'), 'class' => 'btn btn-success btn-xs']) ?>
							<?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fa fa-trash']), ['controller' => 'Users', 'action' => 'delete', $users->id], ['escape' => false, 'title' => __('Delete'), 'class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete this {0}?', $users->id)]) ?>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
    </div>
    </div>
</div>
