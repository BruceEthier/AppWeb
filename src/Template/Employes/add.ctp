<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employe $employe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employes'), ['action' => 'index']) ?></li>
      
        <li><?= $this->Html->link(__('List superviseurs'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New superviseurs'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formations'), ['controller' => 'Formations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Formation'), ['controller' => 'Formations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employes form large-9 medium-8 columns content">
    <?= $this->Form->create($employe) ?>
    <fieldset>
        <legend><?= __('Add Employe') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('civilite_id', ['options' => $civilites]);
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('cellulaire');
            echo $this->Form->control('courriel');
            echo $this->Form->control('user_id');
            echo $this->Form->control('formations._ids', ['options' => $formations]);
        ?>
    </fieldset>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
