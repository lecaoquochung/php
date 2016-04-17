<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Server'), ['action' => 'edit', $server->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Server'), ['action' => 'delete', $server->id], ['confirm' => __('Are you sure you want to delete # {0}?', $server->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Servers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Server'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servers view large-9 medium-8 columns content">
    <h3><?= h($server->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($server->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Ip') ?></th>
            <td><?= h($server->ip) ?></td>
        </tr>
        <tr>
            <th><?= __('Location') ?></th>
            <td><?= h($server->location) ?></td>
        </tr>
        <tr>
            <th><?= __('Api') ?></th>
            <td><?= h($server->api) ?></td>
        </tr>
        <tr>
            <th><?= __('Storage') ?></th>
            <td><?= h($server->storage) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($server->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= $this->Number->format($server->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($server->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($server->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($server->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Keywords') ?></h4>
        <?php if (!empty($server->keywords)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('ID') ?></th>
                <th><?= __('UserID') ?></th>
                <th><?= __('Server Id') ?></th>
                <th><?= __('Keyword') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Engine') ?></th>
                <th><?= __('G Local') ?></th>
                <th><?= __('Cost') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Limit Price') ?></th>
                <th><?= __('Limit Price Group') ?></th>
                <th><?= __('Upday') ?></th>
                <th><?= __('Goukeifee') ?></th>
                <th><?= __('Sengoukeifee') ?></th>
                <th><?= __('$sensengoukeifee') ?></th>
                <th><?= __('Enabled') ?></th>
                <th><?= __('Strict') ?></th>
                <th><?= __('Extra') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('Rankstart') ?></th>
                <th><?= __('Rankend') ?></th>
                <th><?= __('Kaiyaku Reason') ?></th>
                <th><?= __('Middle') ?></th>
                <th><?= __('Middleinfo') ?></th>
                <th><?= __('Seika') ?></th>
                <th><?= __('Nocontract') ?></th>
                <th><?= __('Csv Type') ?></th>
                <th><?= __('Penalty') ?></th>
                <th><?= __('Service') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('C Logic') ?></th>
                <th><?= __('Sales') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Updated') ?></th>
                <th><?= __('Sitename') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($server->keywords as $keywords): ?>
            <tr>
                <td><?= h($keywords->ID) ?></td>
                <td><?= h($keywords->UserID) ?></td>
                <td><?= h($keywords->server_id) ?></td>
                <td><?= h($keywords->Keyword) ?></td>
                <td><?= h($keywords->Url) ?></td>
                <td><?= h($keywords->Engine) ?></td>
                <td><?= h($keywords->g_local) ?></td>
                <td><?= h($keywords->cost) ?></td>
                <td><?= h($keywords->Price) ?></td>
                <td><?= h($keywords->limit_price) ?></td>
                <td><?= h($keywords->limit_price_group) ?></td>
                <td><?= h($keywords->upday) ?></td>
                <td><?= h($keywords->goukeifee) ?></td>
                <td><?= h($keywords->sengoukeifee) ?></td>
                <td><?= h($keywords->$sensengoukeifee) ?></td>
                <td><?= h($keywords->Enabled) ?></td>
                <td><?= h($keywords->Strict) ?></td>
                <td><?= h($keywords->Extra) ?></td>
                <td><?= h($keywords->start) ?></td>
                <td><?= h($keywords->rankstart) ?></td>
                <td><?= h($keywords->rankend) ?></td>
                <td><?= h($keywords->kaiyaku_reason) ?></td>
                <td><?= h($keywords->middle) ?></td>
                <td><?= h($keywords->middleinfo) ?></td>
                <td><?= h($keywords->seika) ?></td>
                <td><?= h($keywords->nocontract) ?></td>
                <td><?= h($keywords->csv_type) ?></td>
                <td><?= h($keywords->penalty) ?></td>
                <td><?= h($keywords->service) ?></td>
                <td><?= h($keywords->mobile) ?></td>
                <td><?= h($keywords->c_logic) ?></td>
                <td><?= h($keywords->sales) ?></td>
                <td><?= h($keywords->created) ?></td>
                <td><?= h($keywords->updated) ?></td>
                <td><?= h($keywords->sitename) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Keywords', 'action' => 'view', $keywords->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Keywords', 'action' => 'edit', $keywords->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Keywords', 'action' => 'delete', $keywords->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $keywords->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
