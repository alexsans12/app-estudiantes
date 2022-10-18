<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observacion $observacion
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $observacion->ID_OBSERVACION],
                ['confirm' => __('Esta seguro de de borrar la observación con id # {0}?', $observacion->ID_OBSERVACION), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Observación'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="observacion form content">
            <?= $this->Form->create($observacion) ?>
            <fieldset>
                <legend><?= __('Editar Observación') ?></legend>
                <?php
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes, 'default'=>$observacion->ID_ESTUDIANTE]);
                    echo $this->Form->control('TIPO', ['label' => '¿Es una Advertencia?']);
                    echo $this->Form->control('OBSERVACION', ['label' => 'Redacte su Observación al Estudiante', 'type'=>'textarea']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
