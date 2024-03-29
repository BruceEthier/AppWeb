<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Civilite $civilite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Civilite'), ['action' => 'edit', $civilite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Civilite'), ['action' => 'delete', $civilite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $civilite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Civilites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Civilite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="civilites view large-9 medium-8 columns content">
    <h3><?= h($civilite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Civilite') ?></th>
            <td><?= h($civilite->civilite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($civilite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($civilite->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($civilite->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employes') ?></h4>
        <?php if (!empty($civilite->employes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Numero') ?></th>
                <th scope="col"><?= __('Civilite Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Cellulaire') ?></th>
                <th scope="col"><?= __('Courriel') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($civilite->employes as $employes): ?>
            <tr>
                <td><?= h($employes->id) ?></td>
                <td><?= h($employes->numero) ?></td>
                <td><?= h($employes->civilite_id) ?></td>
                <td><?= h($employes->nom) ?></td>
                <td><?= h($employes->prenom) ?></td>
                <td><?= h($employes->cellulaire) ?></td>
                <td><?= h($employes->courriel) ?></td>
                <td><?= h($employes->user_id) ?></td>
                <td><?= h($employes->created) ?></td>
                <td><?= h($employes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employes', 'action' => 'view', $employes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employes', 'action' => 'edit', $employes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employes', 'action' => 'delete', $employes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
