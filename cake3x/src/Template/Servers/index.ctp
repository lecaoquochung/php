<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Server'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servers index large-9 medium-8 columns content">
    <h3><?= __('Servers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('ip') ?></th>
                <th><?= $this->Paginator->sort('location') ?></th>
                <th><?= $this->Paginator->sort('api') ?></th>
                <th><?= $this->Paginator->sort('storage') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servers as $server): ?>
            <tr>
                <td><?= $this->Number->format($server->id) ?></td>
                <td><?= $this->Number->format($server->code) ?></td>
                <td><?= h($server->name) ?></td>
                <td><?= h($server->ip) ?></td>
                <td><?= h($server->location) ?></td>
                <td><?= h($server->api) ?></td>
                <td><?= h($server->storage) ?></td>
                <td><?= h($server->created) ?></td>
                <td><?= h($server->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $server->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $server->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $server->id], ['confirm' => __('Are you sure you want to delete # {0}?', $server->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
