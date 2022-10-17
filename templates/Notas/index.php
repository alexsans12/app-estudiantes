<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nota> $notas
 */
?>
<div class="notas index content">
    <?= $this->Html->link(__('Agregar Nota de un Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_NOTAS', 'Id') ?></th>
                    <th><?= $this->Paginator->sort('ID_CURSO', 'Curso') ?></th>
                    <th><?= $this->Paginator->sort('ID_ESTUDIANTE', 'Estudiante') ?></th>
                    <th><?= $this->Paginator->sort('NOTA', 'Nota') ?></th>
                    <th><?= $this->Paginator->sort('APROBADO', 'Aprobada') ?></th>
                    <th><?= $this->Paginator->sort('FECHA', 'Ingresado') ?></th>
                    <th><?= $this->Paginator->sort('FECHA_MODIFICACION', 'Ultima Modificación') ?></th>
                    <th><?= $this->Paginator->sort('SECCION', 'Sección') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notas as $nota): ?>
                <tr>
                    <td><?= $this->Number->format($nota->ID_NOTAS) ?></td>
                    <td><?= h($cursos[$nota->ID_CURSO]) ?></td>
                    <td><?= h($estudiantes[$nota->ID_ESTUDIANTE]) ?></td>
                    <td><?= $this->Number->format($nota->NOTA) ?></td>
                    <td><?= h($nota->APROBADO ? 'Si' : 'No') ?></td>
                    <td><?= h($nota->FECHA->nice()) ?></td>
                    <td><?= h($nota->FECHA_MODIFICACION->nice()) ?></td>
                    <td><?= h($nota->SECCION) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $nota->ID_NOTAS]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $nota->ID_NOTAS]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $nota->ID_NOTAS], ['confirm' => __('Esta seguro de eliminar la nota con id # {0}?', $nota->ID_NOTAS)]) ?>
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
