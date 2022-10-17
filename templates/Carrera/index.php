<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carrera> $carrera
 */
?>
<div class="carrera index content">
    <?= $this->Html->link(__('Nueva Carrera'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carreras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_CARRERA', 'Id') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE','Nombre') ?></th>
                    <th><?= $this->Paginator->sort('DESCRIPCION','Descripción') ?></th>
                    <th><?= $this->Paginator->sort('ESTADO','Estado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrera as $carrera): ?>
                <tr>
                    <td><?= $this->Number->format($carrera->ID_CARRERA) ?></td>
                    <td><?= h($carrera->NOMBRE) ?></td>
                    <td><?= h($carrera->DESCRIPCION) ?></td>
                    <td><?= h($carrera->ESTADO ? __('Activa') : __('Inactiva')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->ID_CARRERA]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carrera->ID_CARRERA]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Esta seguro de borrar la carrera con id # {0}?', $carrera->ID_CARRERA)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('inicio')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagína {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
    </div>
</div>
