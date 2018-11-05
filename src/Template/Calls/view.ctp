<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Call $call
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Call'), ['action' => 'edit', $call->call_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Call'), ['action' => 'delete', $call->call_id], ['confirm' => __('Are you sure you want to delete # {0}?', $call->call_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Call'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Priorities'), ['controller' => 'Priorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Priority'), ['controller' => 'Priorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calls view large-9 medium-8 columns content">
    <h3><?= h($call->call_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $call->has('employee') ? $this->Html->link($call->employee->employee_name, ['controller' => 'Employees', 'action' => 'view', $call->employee->employee_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $call->has('situation') ? $this->Html->link($call->situation->situation_description, ['controller' => 'Situations', 'action' => 'view', $call->situation->situation_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $call->has('priority') ? $this->Html->link($call->priority->priority_description, ['controller' => 'Priorities', 'action' => 'view', $call->priority->priority_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Id') ?></th>
            <td><?= $this->Number->format($call->call_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Requester') ?></th>
            <td><?= $this->Number->format($call->call_requester) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Creation') ?></th>
            <td><?= h($call->call_creation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Closure') ?></th>
            <td><?= h($call->call_closure) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Call Occurrence') ?></h4>
        <?= $this->Text->autoParagraph(h($call->call_occurrence)); ?>
    </div>
</div>
