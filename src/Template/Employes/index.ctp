<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employe[]|\Cake\Collection\CollectionInterface $employes
 */
?>  
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link( __('add employe'), ['action' => 'add']) ?></li>
        
        <li><?= $this->Html->link(__('List superviseurs'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New superviseurs'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formations'), ['controller' => 'Formations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Formation'), ['controller' => 'Formations', 'action' => 'add']) ?></li>
        <li><a href="apropos.html">A propos</a></li>
    </ul>
</nav>
<div class="employes index large-9 medium-8 columns content">
    <h3><?= __('Employes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
            <?
             /*    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                     <td><?= $this->Number->format($employe->id) ?></td>    

             */



            ?>


               
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('civilite_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cellulaire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courriel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('superviseur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employes as $employe): ?>
            <tr>
               
                <td><?= h($employe->numero) ?></td>
                <td><?= $employe->has('civilite') ? $this->Html->link($employe->civilite->civilite, ['controller' => 'Civilites', 'action' => 'view', $employe->civilite->id]) : '' ?></td>
                <td><?= h($employe->nom) ?></td>
                <td><?= h($employe->prenom) ?></td>
                <td><?= h($employe->cellulaire) ?></td>
                <td><?= h($employe->courriel) ?></td>
                <td><?= h($employe->user->nom) ?></td>
                <td><?= h($employe->created) ?></td>
                <td><?= h($employe->modified) ?></td>
                <td><?=  $this->Html->image($employe->file->path) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employe->id)]) ?>
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
