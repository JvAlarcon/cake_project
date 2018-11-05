<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Call $call
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calls form large-9 medium-8 columns content">
    <?= $this->Form->create($call) ?>
    <fieldset>
        <legend><?= __('Add Call') ?></legend>
        <?php
            echo $this->Form->control('call_occurrence');
            echo $this->Form->control('call_requester', ['options' => $employees]);
            echo $this->Form->control('call_responsible', ['options' => $employees]);
            echo $this->Form->control('situation_id', ['options' => $situations]);
            echo $this->Form->control('call_creation');
            echo $this->Form->control('call_closure', ['empty' => true]);
            echo $this->Form->control('priority_id', ['options' => $priorities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
