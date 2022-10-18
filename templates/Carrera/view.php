<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Accciones') ?></h4>
            <?= $this->Html->link(__('Editar Carrera'), ['action' => 'edit', $carrera->ID_CARRERA], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Carrera'), ['action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Esta seguro de borrar la carrera con id # {0}?', $carrera->ID_CARRERA), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listado de Carreras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar Carrera'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="carrera view content">
            <h3><?= h($carrera->ID_CARRERA) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($carrera->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripción') ?></th>
                    <td><?= h($carrera->DESCRIPCION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $carrera->ESTADO ? __('Activa') : __('Inactiva'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
