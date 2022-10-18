<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Estudiante'), ['action' => 'edit', $estudiante->ID_ESTUDIANTE], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Estudiante'), ['action' => 'delete', $estudiante->ID_ESTUDIANTE], ['confirm' => __('Seguro que quiere borrar al estudiante con id # {0}?', $estudiante->ID_ESTUDIANTE), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar Estudiante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
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
        <div class="related view content">
            <h4><?= __('Notas') ?></h4>
            <?php if (!empty($estudiante->notas)) : ?>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th><?= h('Id') ?></th>
                                <th><?= h('Curso') ?></th>
                                <th><?= h('Nota') ?></th>
                                <th><?= h('Aprobada') ?></th>
                                <th><?= h('Sección') ?></th>
                                <th class="actions"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estudiante->notas as $nota): ?>
                            <tr>
                                <td><?= $this->Number->format($nota->ID_NOTAS) ?></td>
                                <td><?= h($cursos[$nota->ID_CURSO]) ?></td>
                                <td><?= $this->Number->format($nota->NOTA) ?></td>
                                <td><?= h($nota->APROBADO ? 'Si' : 'No') ?></td>
                                <td><?= h($nota->SECCION) ?></td>
                                <td class="actions btn-group">
                                    <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $nota->ID_NOTAS], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="related view content">
            <h4><?= __('Observaciones') ?></h4>
            <?php if (!empty($estudiante->observacion)) : ?>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th><?= h('Id') ?></th>
                                <th><?= h('Observación') ?></th>
                                <th><?= h('Tipo de Observación') ?></th>
                                <th><?= h('Fecha') ?></th>
                                <th class="actions"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estudiante->observacion as $observacion): ?>
                            <tr>
                                <td><?= $this->Number->format($observacion->ID_OBSERVACION) ?></td>
                                <td><?= h($observacion->OBSERVACION) ?></td>
                                <td><?= h($observacion->TIPO) ? 'Advertencia' : 'Felicitación' ?></td>
                                <td><?= h($observacion->FECHA_OBSERVACION->nice()) ?></td>
                                <td class="actions btn-group">
                                    <?= $this->Html->link('<i class="bi bi-eye"></i>', ['controller'=>'observacion','action' => 'view', $observacion->ID_OBSERVACION], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
