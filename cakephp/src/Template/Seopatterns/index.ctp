<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seopattern'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seopatterns index large-9 medium-8 columns content">
    <h3><?= __('Seopatterns') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('keyword_id') ?></th>
                <th><?= $this->Paginator->sort('seotracking_category_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('combination') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seopatterns as $seopattern): ?>
            <tr>
                <td><?= $this->Number->format($seopattern->id) ?></td>
                <td><?= h($seopattern->keyword_id) ?></td>
                <td><?= h($seopattern->seotracking_category_id) ?></td>
                <td><?= h($seopattern->name) ?></td>
                <td><?= h($seopattern->combination) ?></td>
                <td><?= h($seopattern->date) ?></td>
                <td><?= h($seopattern->created) ?></td>
                <td><?= h($seopattern->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seopattern->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seopattern->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seopattern->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seopattern->id)]) ?>
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
