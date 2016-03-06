<div class="row">
    <div class="col-xs-12">
        <div class="actions">
            <ul class="side-nav btn-group">
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header"></div>
            <div class="box-body">
                <div class="users index dataTable_wrapper table-responsive">
                    <table id="dataTables-users" class="dataTable table table-striped table-bordered">
                        <thead>
                            <tr>
								<th><?= $this->Paginator->sort('id') ?></th>
								<th><?= $this->Paginator->sort('name') ?></th>
								<th><?= $this->Paginator->sort('created') ?></th>
								<th><?= $this->Paginator->sort('modified') ?></th>
								<th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody class="ui-sortable">
						<?php $count = 0 ?>
						<?php foreach ($groups as $group): ?>
						<tr id="<?= $group->id; ?>" class="<?= (++$count%2 ? 'odd' : 'even') ?>">
							<td><?= $this->Number->format($group->id) ?></td>
							<td><?= h($group->name) ?></td>
							<td><?= h($group->created) ?></td>
							<td><?= h($group->modified) ?></td>
							<td class="actions">
                                    <div class="btn-group">
                                        <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-eye']), ['action' => 'view', $group->id], ['escape' => false, 'title' => __('View'), 'class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-pencil']), ['action' => 'edit', $group->id], ['escape' => false, 'title' => __('Edit'), 'class' => 'btn btn-success btn-xs']) ?>
                                        <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fa fa-trash']), ['action' => 'delete', $group->id], ['escape' => false, 'title' => __('Delete'), 'class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete this {0}?', 'user')]) ?>
                                    </div>
                                </td>
						</tr>
						<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>