<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seopattern'), ['action' => 'edit', $seopattern->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seopattern'), ['action' => 'delete', $seopattern->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seopattern->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seopattern'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seopatterns view large-9 medium-8 columns content">
    <h3><?= h($seopattern->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Keyword Id') ?></th>
            <td><?= h($seopattern->keyword_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Seotracking Category Id') ?></th>
            <td><?= h($seopattern->seotracking_category_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($seopattern->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Combination') ?></th>
            <td><?= h($seopattern->combination) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($seopattern->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($seopattern->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($seopattern->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($seopattern->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($seopattern->description)); ?>
    </div>
</div>
