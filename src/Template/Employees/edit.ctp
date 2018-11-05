<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->employee_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employee_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Edit Employee') ?></legend>
        <?php
            echo $this->Form->control('employee_name');
            echo $this->Form->control('employee_cpf');
            echo $this->Form->control('employee_email');
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('employee_boss');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
