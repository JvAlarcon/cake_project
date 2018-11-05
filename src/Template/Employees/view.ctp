<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->employee_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee Name') ?></th>
            <td><?= h($employee->employee_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Cpf') ?></th>
            <td><?= h($employee->employee_cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Email') ?></th>
            <td><?= h($employee->employee_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $employee->has('department') ? $this->Html->link($employee->department->department_name, ['controller' => 'Departments', 'action' => 'view', $employee->department->department_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Id') ?></th>
            <td><?= $this->Number->format($employee->employee_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Boss') ?></th>
            <td><?= $employee->employee_boss ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
