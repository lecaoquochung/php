<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seotracking Category'), ['action' => 'edit', $seotrackingCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seotracking Category'), ['action' => 'delete', $seotrackingCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seotrackingCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seotracking Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seotracking Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seotrackingCategories view large-9 medium-8 columns content">
    <h3><?= h($seotrackingCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($seotrackingCategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($seotrackingCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent') ?></th>
            <td><?= $this->Number->format($seotrackingCategory->parent) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($seotrackingCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($seotrackingCategory->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($seotrackingCategory->detail)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seopatterns') ?></h4>
        <?php if (!empty($seotrackingCategory->seopatterns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Keyword Id') ?></th>
                <th><?= __('Seotracking Category Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Combination') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($seotrackingCategory->seopatterns as $seopatterns): ?>
            <tr>
                <td><?= h($seopatterns->id) ?></td>
                <td><?= h($seopatterns->keyword_id) ?></td>
                <td><?= h($seopatterns->seotracking_category_id) ?></td>
                <td><?= h($seopatterns->name) ?></td>
                <td><?= h($seopatterns->description) ?></td>
                <td><?= h($seopatterns->combination) ?></td>
                <td><?= h($seopatterns->date) ?></td>
                <td><?= h($seopatterns->created) ?></td>
                <td><?= h($seopatterns->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seopatterns', 'action' => 'view', $seopatterns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seopatterns', 'action' => 'edit', $seopatterns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seopatterns', 'action' => 'delete', $seopatterns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seopatterns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
