<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carrera> $carrera
 */
?>
<div class="carrera index content">
    <?= $this->Html->link('<i class="bi bi-plus-circle"></i>', ['action' => 'add'], ['class'=>'btn btn-primary float-right fs-2 px-5 px-2', 'escape'=>false]) ?>
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
                    <td class="actions btn-group">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $carrera->ID_CARRERA], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $carrera->ID_CARRERA], ['class'=>'btn btn-warning fs-3 p-3 text-dark', 'escape'=>false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash3"></i>', ['action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Esta seguro de borrar la carrera con id # {0}?', $carrera->ID_CARRERA), 'class'=>'btn btn-danger fs-3 p-3 text-light', 'escape'=>false]) ?>
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
