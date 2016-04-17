<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Seotracking Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seotrackingCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($seotrackingCategory) ?>
    <fieldset>
        <legend><?= __('Add Seotracking Category') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('parent');
            echo $this->Form->input('detail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
