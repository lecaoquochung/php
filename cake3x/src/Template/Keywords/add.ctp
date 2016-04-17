<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Keywords'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="keywords form large-9 medium-8 columns content">
    <?= $this->Form->create($keyword) ?>
    <fieldset>
        <legend><?= __('Add Keyword') ?></legend>
        <?php
            echo $this->Form->input('UserID');
            echo $this->Form->input('server_id');
            echo $this->Form->input('Keyword');
            echo $this->Form->input('Url');
            echo $this->Form->input('Engine');
            echo $this->Form->input('g_local');
            echo $this->Form->input('cost');
            echo $this->Form->input('Price');
            echo $this->Form->input('limit_price');
            echo $this->Form->input('limit_price_group');
            echo $this->Form->input('upday');
            echo $this->Form->input('goukeifee');
            echo $this->Form->input('sengoukeifee');
            echo $this->Form->input('$sensengoukeifee');
            echo $this->Form->input('Enabled');
            echo $this->Form->input('Strict');
            echo $this->Form->input('Extra');
            echo $this->Form->input('start');
            echo $this->Form->input('rankstart');
            echo $this->Form->input('rankend');
            echo $this->Form->input('kaiyaku_reason');
            echo $this->Form->input('middle');
            echo $this->Form->input('middleinfo');
            echo $this->Form->input('seika');
            echo $this->Form->input('nocontract');
            echo $this->Form->input('csv_type');
            echo $this->Form->input('penalty');
            echo $this->Form->input('service');
            echo $this->Form->input('mobile');
            echo $this->Form->input('c_logic');
            echo $this->Form->input('sales');
            echo $this->Form->input('sitename');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
