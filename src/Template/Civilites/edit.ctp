<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Civilite $civilite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $civilite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $civilite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Civilites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="civilites form large-9 medium-8 columns content">
    <?= $this->Form->create($civilite) ?>
    <fieldset>
        <legend><?= __('Edit Civilite') ?></legend>
        <?php
            echo $this->Form->control('civilite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
