<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Observacion> $observacion
 */
?>
<div class="observacion index content">
    <?= $this->Html->link(__('Agregar Observacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
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
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $observacion->ID_OBSERVACION]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $observacion->ID_OBSERVACION]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $observacion->ID_OBSERVACION], ['confirm' => __('Esta seguro de de borrar la observación con id # {0}?', $observacion->ID_OBSERVACION)]) ?>
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
