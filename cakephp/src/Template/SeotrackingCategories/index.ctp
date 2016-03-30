<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seotracking Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seotrackingCategories index large-9 medium-8 columns content">
    <h3><?= __('Seotracking Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('parent') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seotrackingCategories as $seotrackingCategory): ?>
            <tr>
                <td><?= $this->Number->format($seotrackingCategory->id) ?></td>
                <td><?= h($seotrackingCategory->name) ?></td>
                <td><?= $this->Number->format($seotrackingCategory->parent) ?></td>
                <td><?= h($seotrackingCategory->created) ?></td>
                <td><?= h($seotrackingCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seotrackingCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seotrackingCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seotrackingCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seotrackingCategory->id)]) ?>
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
