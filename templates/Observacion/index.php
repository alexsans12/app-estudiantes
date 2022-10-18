<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Observacion> $observacion
 */
?>
<div class="observacion index content">
    <?= $this->Html->link('<i class="bi bi-plus-circle"></i>', ['action' => 'add'], ['class'=>'btn btn-primary float-right fs-2 px-5 px-2', 'escape'=>false]) ?>
    <h3><?= __('Observaciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_OBSERVACION', 'Id') ?></th>
                    <th><?= $this->Paginator->sort('ID_ESTUDIANTE', 'Estudiante') ?></th>
                    <th><?= $this->Paginator->sort('TIPO', 'Tipo de Observación') ?></th>
                    <th><?= $this->Paginator->sort('FECHA_OBSERVACION', 'Fecha') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($observaciones as $observacion): ?>
                <tr>
                    <td><?= $this->Number->format($observacion->ID_OBSERVACION) ?></td>
                    <td><?= h($estudiantes[$observacion->ID_ESTUDIANTE]) ?></td>
                    <td><?= h($observacion->TIPO) ? 'Advertencia' : 'Felicitación' ?></td>
                    <td><?= h($observacion->FECHA_OBSERVACION->nice()) ?></td>
                    <td class="actions btn-group">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $observacion->ID_OBSERVACION], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $observacion->ID_OBSERVACION], ['class'=>'btn btn-warning fs-3 p-3 text-dark', 'escape'=>false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash3"></i>', ['action' => 'delete', $observacion->ID_OBSERVACION], ['confirm' => __('Esta seguro de de borrar la observación con id # {0}?', $observacion->ID_OBSERVACION), 'class'=>'btn btn-danger fs-3 p-3 text-light', 'escape'=>false]) ?>
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
