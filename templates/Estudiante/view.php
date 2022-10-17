<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Estudiante'), ['action' => 'edit', $estudiante->ID_ESTUDIANTE], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Estudiante'), ['action' => 'delete', $estudiante->ID_ESTUDIANTE], ['confirm' => __('Seguro que quiere borrar al estudiante con id # {0}?', $estudiante->ID_ESTUDIANTE), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar Estudiante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante view content">
            <h3><?= h($estudiante->ID_ESTUDIANTE) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($estudiante->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($estudiante->APELLIDO) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?= $this->Html->image('fotografias/'.h($estudiante->FOTOGRAFIA)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carrera') ?></th>
                    <td><?= h($estudiante->carrera->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Nacimiento') ?></th>
                    <td><?= h($estudiante->FECHA_NACIMIENTO) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
