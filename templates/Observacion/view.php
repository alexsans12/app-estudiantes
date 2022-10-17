<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observacion $observacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Observación'), ['action' => 'edit', $observacion->ID_OBSERVACION], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Observación'), ['action' => 'delete', $observacion->ID_OBSERVACION], ['confirm' => __('Are you sure you want to delete # {0}?', $observacion->ID_OBSERVACION), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Observaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar Observación'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="observacion view content">
            <h3><?= h($observacion->ID_OBSERVACION) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estudiante') ?></th>
                    <td><?= h($observacion->estudiante->NOMBRE . ' ' . $observacion->estudiante->APELLIDO) ?></td>
                    <td><?= $this->Html->link(__('Ver'), ['controller'=>'estudiante','action' => 'view', $observacion->estudiante->ID_ESTUDIANTE], ['class' => 'button float-right']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Creación') ?></th>
                    <td colspan='2'><?= h($observacion->FECHA_OBSERVACION) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo de Observación') ?></th>
                    <td colspan='2'><?= $observacion->TIPO ? __('Advertencia') : __('Felicitación'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observación') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($observacion->OBSERVACION)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
