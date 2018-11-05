<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Call[]|\Cake\Collection\CollectionInterface $calls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Call'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calls index large-9 medium-8 columns content">
    <h3><?= __('Calls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('call_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('call_requester') ?></th>
                <th scope="col"><?= $this->Paginator->sort('call_responsible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('call_creation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('call_closure') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calls as $call): ?>
            <tr>
                <td><?= $this->Number->format($call->call_id) ?></td>
                <td><?= $this->Number->format($call->call_requester) ?></td>
                <td><?= $call->has('employee') ? $this->Html->link($call->employee->employee_name, ['controller' => 'Employees', 'action' => 'view', $call->employee->employee_id]) : '' ?></td>
                <td><?= $call->has('situation') ? $this->Html->link($call->situation->situation_description, ['controller' => 'Situations', 'action' => 'view', $call->situation->situation_id]) : '' ?></td>
                <td><?= h($call->call_creation) ?></td>
                <td><?= h($call->call_closure) ?></td>
                <td><?= $call->has('priority') ? $this->Html->link($call->priority->priority_description, ['controller' => 'Priorities', 'action' => 'view', $call->priority->priority_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $call->call_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $call->call_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $call->call_id], ['confirm' => __('Are you sure you want to delete # {0}?', $call->call_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
