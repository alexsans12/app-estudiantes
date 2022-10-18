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
            <?= $this->Html->link(__('Lista de Observaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="observacion form content">
            <?= $this->Form->create($observacion) ?>
            <fieldset>
                <legend><?= __('Crear una Observación') ?></legend>
                <?php
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes]);
                    echo $this->Form->control('TIPO', ['label' => '¿Es una Advertencia?']);
                    echo $this->Form->control('OBSERVACION', ['label' => 'Redacte su Observación al Estudiante', 'type'=>'textarea']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
