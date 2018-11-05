<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $login->login_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $login->login_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Logins'), ['controller' => 'Logins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logins form large-9 medium-8 columns content">
    <?= $this->Form->create($login) ?>
    <fieldset>
        <legend><?= __('Edit Login') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
