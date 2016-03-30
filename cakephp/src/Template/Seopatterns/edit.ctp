<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seopattern->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seopattern->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="seopatterns form large-9 medium-8 columns content">
    <?= $this->Form->create($seopattern) ?>
    <fieldset>
        <legend><?= __('Edit Seopattern') ?></legend>
        <?php
            echo $this->Form->input('keyword_id');
            echo $this->Form->input('seotracking_category_id');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('combination');
            echo $this->Form->input('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
