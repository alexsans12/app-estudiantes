<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carrera'), ['action' => 'edit', $carrera->ID_CARRERA], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carrera'), ['action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->ID_CARRERA), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carrera'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carrera view content">
            <h3><?= h($carrera->ID_CARRERA) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($carrera->ID_CARRERA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($carrera->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripción') ?></th>
                    <td><?= h($carrera->DESCRIPCION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $carrera->ESTADO ? __('Activa') : __('Inactiva'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
