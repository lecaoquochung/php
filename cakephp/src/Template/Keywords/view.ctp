<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Keyword'), ['action' => 'edit', $keyword->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Keyword'), ['action' => 'delete', $keyword->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Keywords'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keyword'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="keywords view large-9 medium-8 columns content">
    <h3><?= h($keyword->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Keyword') ?></th>
            <td><?= h($keyword->Keyword) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($keyword->Url) ?></td>
        </tr>
        <tr>
            <th><?= __('G Local') ?></th>
            <td><?= h($keyword->g_local) ?></td>
        </tr>
        <tr>
            <th><?= __('Upday') ?></th>
            <td><?= h($keyword->upday) ?></td>
        </tr>
        <tr>
            <th><?= __('Middle') ?></th>
            <td><?= h($keyword->middle) ?></td>
        </tr>
        <tr>
            <th><?= __('Sitename') ?></th>
            <td><?= h($keyword->sitename) ?></td>
        </tr>
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($keyword->ID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($keyword->UserID) ?></td>
        </tr>
        <tr>
            <th><?= __('Server Id') ?></th>
            <td><?= $this->Number->format($keyword->server_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Engine') ?></th>
            <td><?= $this->Number->format($keyword->Engine) ?></td>
        </tr>
        <tr>
            <th><?= __('Cost') ?></th>
            <td><?= $this->Number->format($keyword->cost) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($keyword->Price) ?></td>
        </tr>
        <tr>
            <th><?= __('Limit Price') ?></th>
            <td><?= $this->Number->format($keyword->limit_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Limit Price Group') ?></th>
            <td><?= $this->Number->format($keyword->limit_price_group) ?></td>
        </tr>
        <tr>
            <th><?= __('Goukeifee') ?></th>
            <td><?= $this->Number->format($keyword->goukeifee) ?></td>
        </tr>
        <tr>
            <th><?= __('Sengoukeifee') ?></th>
            <td><?= $this->Number->format($keyword->sengoukeifee) ?></td>
        </tr>
        <tr>
            <th><?= __('$sensengoukeifee') ?></th>
            <td><?= $this->Number->format($keyword->$sensengoukeifee) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= $this->Number->format($keyword->start) ?></td>
        </tr>
        <tr>
            <th><?= __('Rankstart') ?></th>
            <td><?= $this->Number->format($keyword->rankstart) ?></td>
        </tr>
        <tr>
            <th><?= __('Rankend') ?></th>
            <td><?= $this->Number->format($keyword->rankend) ?></td>
        </tr>
        <tr>
            <th><?= __('Middleinfo') ?></th>
            <td><?= $this->Number->format($keyword->middleinfo) ?></td>
        </tr>
        <tr>
            <th><?= __('Seika') ?></th>
            <td><?= $this->Number->format($keyword->seika) ?></td>
        </tr>
        <tr>
            <th><?= __('Nocontract') ?></th>
            <td><?= $this->Number->format($keyword->nocontract) ?></td>
        </tr>
        <tr>
            <th><?= __('Csv Type') ?></th>
            <td><?= $this->Number->format($keyword->csv_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Service') ?></th>
            <td><?= $this->Number->format($keyword->service) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($keyword->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($keyword->updated) ?></td>
        </tr>
        <tr>
            <th><?= __('Enabled') ?></th>
            <td><?= $keyword->Enabled ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Strict') ?></th>
            <td><?= $keyword->Strict ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Extra') ?></th>
            <td><?= $keyword->Extra ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Penalty') ?></th>
            <td><?= $keyword->penalty ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= $keyword->mobile ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('C Logic') ?></th>
            <td><?= $keyword->c_logic ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Sales') ?></th>
            <td><?= $keyword->sales ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Kaiyaku Reason') ?></h4>
        <?= $this->Text->autoParagraph(h($keyword->kaiyaku_reason)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seopatterns') ?></h4>
        <?php if (!empty($keyword->seopatterns)): ?>
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
            <?php foreach ($keyword->seopatterns as $seopatterns): ?>
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
