<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Curso'), ['action' => 'edit', $curso->ID_CURSO], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Curso'), ['action' => 'delete', $curso->ID_CURSO], ['confirm' => __('Esta seguro de borrar el curso con id # {0}?', $curso->ID_CURSO), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado de Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar un Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="curso view content">
            <h3><?= h($curso->ID_CURSO) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre del Curso') ?></th>
                    <td><?= h($curso->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripción') ?></th>
                    <td><?= h($curso->DESCRIPCION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semestre') ?></th>
                    <td><?= h($curso->semestre->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('ESTADO') ?></th>
                    <td><?= $curso->ESTADO ? __('Activo') : __('Inactivo'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
