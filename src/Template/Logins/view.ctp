<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Login'), ['action' => 'edit', $login->login_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Login'), ['action' => 'delete', $login->login_id], ['confirm' => __('Are you sure you want to delete # {0}?', $login->login_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logins view large-9 medium-8 columns content">
    <h3><?= h($login->login_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $login->has('employee') ? $this->Html->link($login->employee->employee_name, ['controller' => 'Employees', 'action' => 'view', $login->employee->employee_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($login->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= $this->Number->format($login->login_id) ?></td>
        </tr>
    </table>
</div>
