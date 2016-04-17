<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seopatterns'), ['controller' => 'Seopatterns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seopattern'), ['controller' => 'Seopatterns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="keywords index large-9 medium-8 columns content">
    <h3><?= __('Keywords') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('UserID') ?></th>
                <th><?= $this->Paginator->sort('server_id') ?></th>
                <th><?= $this->Paginator->sort('Keyword') ?></th>
                <th><?= $this->Paginator->sort('Url') ?></th>
                <th><?= $this->Paginator->sort('Engine') ?></th>
                <th><?= $this->Paginator->sort('g_local') ?></th>
                <th><?= $this->Paginator->sort('cost') ?></th>
                <th><?= $this->Paginator->sort('Price') ?></th>
                <th><?= $this->Paginator->sort('limit_price') ?></th>
                <th><?= $this->Paginator->sort('limit_price_group') ?></th>
                <th><?= $this->Paginator->sort('upday') ?></th>
                <th><?= $this->Paginator->sort('goukeifee') ?></th>
                <th><?= $this->Paginator->sort('sengoukeifee') ?></th>
                <th><?= $this->Paginator->sort('$sensengoukeifee') ?></th>
                <th><?= $this->Paginator->sort('Enabled') ?></th>
                <th><?= $this->Paginator->sort('Strict') ?></th>
                <th><?= $this->Paginator->sort('Extra') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('rankstart') ?></th>
                <th><?= $this->Paginator->sort('rankend') ?></th>
                <th><?= $this->Paginator->sort('middle') ?></th>
                <th><?= $this->Paginator->sort('middleinfo') ?></th>
                <th><?= $this->Paginator->sort('seika') ?></th>
                <th><?= $this->Paginator->sort('nocontract') ?></th>
                <th><?= $this->Paginator->sort('csv_type') ?></th>
                <th><?= $this->Paginator->sort('penalty') ?></th>
                <th><?= $this->Paginator->sort('service') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('c_logic') ?></th>
                <th><?= $this->Paginator->sort('sales') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th><?= $this->Paginator->sort('sitename') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keywords as $keyword): ?>
            <tr>
                <td><?= $this->Number->format($keyword->ID) ?></td>
                <td><?= $this->Number->format($keyword->UserID) ?></td>
                <td><?= $this->Number->format($keyword->server_id) ?></td>
                <td><?= h($keyword->Keyword) ?></td>
                <td><?= h($keyword->Url) ?></td>
                <td><?= $this->Number->format($keyword->Engine) ?></td>
                <td><?= h($keyword->g_local) ?></td>
                <td><?= $this->Number->format($keyword->cost) ?></td>
                <td><?= $this->Number->format($keyword->Price) ?></td>
                <td><?= $this->Number->format($keyword->limit_price) ?></td>
                <td><?= $this->Number->format($keyword->limit_price_group) ?></td>
                <td><?= h($keyword->upday) ?></td>
                <td><?= $this->Number->format($keyword->goukeifee) ?></td>
                <td><?= $this->Number->format($keyword->sengoukeifee) ?></td>
                <td><?= $this->Number->format($keyword->$sensengoukeifee) ?></td>
                <td><?= h($keyword->Enabled) ?></td>
                <td><?= h($keyword->Strict) ?></td>
                <td><?= h($keyword->Extra) ?></td>
                <td><?= $this->Number->format($keyword->start) ?></td>
                <td><?= $this->Number->format($keyword->rankstart) ?></td>
                <td><?= $this->Number->format($keyword->rankend) ?></td>
                <td><?= h($keyword->middle) ?></td>
                <td><?= $this->Number->format($keyword->middleinfo) ?></td>
                <td><?= $this->Number->format($keyword->seika) ?></td>
                <td><?= $this->Number->format($keyword->nocontract) ?></td>
                <td><?= $this->Number->format($keyword->csv_type) ?></td>
                <td><?= h($keyword->penalty) ?></td>
                <td><?= $this->Number->format($keyword->service) ?></td>
                <td><?= h($keyword->mobile) ?></td>
                <td><?= h($keyword->c_logic) ?></td>
                <td><?= h($keyword->sales) ?></td>
                <td><?= h($keyword->created) ?></td>
                <td><?= h($keyword->updated) ?></td>
                <td><?= h($keyword->sitename) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $keyword->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $keyword->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $keyword->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->ID)]) ?>
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
