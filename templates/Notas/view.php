<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Nota'), ['action' => 'edit', $nota->ID_NOTAS], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Nota'), ['action' => 'delete', $nota->ID_NOTAS], ['confirm' => __('Esta seguro de eliminar la nota con id # {0}?', $nota->ID_NOTAS), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado de Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar una Nota'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="notas view content">
            <h3><?= h($nota->ID_NOTAS) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sección') ?></th>
                    <td><?= h($nota->SECCION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($nota->curso->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estudiante') ?></th>
                    <td><?= h($nota->estudiante->NOMBRE . ' ' . $nota->estudiante->APELLIDO) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nota') ?></th>
                    <td><?= $this->Number->format($nota->NOTA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingresado') ?></th>
                    <td><?= h($nota->FECHA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ultima Modificación') ?></th>
                    <td><?= h($nota->FECHA_MODIFICACION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso aprobado') ?></th>
                    <td><?= $nota->APROBADO ? __('Si') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
