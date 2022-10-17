<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estudiante> $estudiante
 */
?>
<div class="estudiante index content">
    <?= $this->Html->link(__('Agregar Estudiante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
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
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $estudiante->ID_ESTUDIANTE]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estudiante->ID_ESTUDIANTE]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $estudiante->ID_ESTUDIANTE], ['confirm' => __('Seguro que quiere borrar al estudiante con id # {0}?', $estudiante->ID_ESTUDIANTE)]) ?>
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
