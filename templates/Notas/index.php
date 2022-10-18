<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nota> $notas
 */
?>
<div class="notas index content">
    <?= $this->Html->link('<i class="bi bi-plus-circle"></i>', ['action' => 'add'], ['class'=>'btn btn-primary float-right fs-2 px-5 px-2', 'escape'=>false]) ?>
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
                    <td class="actions btn-group">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $nota->ID_NOTAS], ['class'=>'btn btn-success fs-3 p-3 text-light', 'escape'=>false]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $nota->ID_NOTAS], ['class'=>'btn btn-warning fs-3 p-3 text-dark', 'escape'=>false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash3"></i>', ['action' => 'delete', $nota->ID_NOTAS], ['confirm' => __('Esta seguro de eliminar la nota con id # {0}?', $nota->ID_NOTAS), 'class'=>'btn btn-danger fs-3 p-3 text-light', 'escape'=>false]) ?>
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
