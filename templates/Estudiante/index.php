<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estudiante> $estudiante
 */
?>
<div class="estudiante index content mb-5">
    <a href="/estudiante/add" class="btn btn-primary float-right fs-2 px-5 px-2"><i class="bi bi-plus-circle"></i></a>
    <h3><?= __('Estudiantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_ESTUDIANTE', 'Id') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE', 'Nombre') ?></th>
                    <th><?= $this->Paginator->sort('APELLIDO', 'Apellido') ?></th>
                    <th><?= $this->Paginator->sort('FOTOGRAFIA', 'Foto') ?></th>
                    <th><?= $this->Paginator->sort('FECHA_NACIMIENTO', 'Fecha de Nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('ID_CARRERA', 'Carrera') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $this->Number->format($estudiante->ID_ESTUDIANTE) ?></td>
                    <td><?= h($estudiante->NOMBRE) ?></td>
                    <td><?= h($estudiante->APELLIDO) ?></td>
                    <td><?= h($estudiante->FOTOGRAFIA) ? 'Tiene Foto' : 'No tiene Foto' ?></td>
                    <td><?= h($estudiante->FECHA_NACIMIENTO) ?></td>
                    <td><?= h($carreras[$estudiante->ID_CARRERA]) ?></td>
                    <td class="actions btn-group">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $estudiante->ID_ESTUDIANTE], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $estudiante->ID_ESTUDIANTE], ['class'=>'btn btn-warning fs-3 p-3 text-dark', 'escape'=>false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash3"></i>', ['action' => 'delete', $estudiante->ID_ESTUDIANTE], ['confirm' => __('Seguro que quiere borrar al estudiante con id # {0}?', $estudiante->ID_ESTUDIANTE), 'class'=>'btn btn-danger fs-3 p-3 text-light', 'escape'=>false]) ?>
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
