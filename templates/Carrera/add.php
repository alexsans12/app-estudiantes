<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listado de Carreras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="carrera form content">
            <?= $this->Form->create($carrera) ?>
            <fieldset>
                <legend><?= __('Agregar Carrera') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE', ['label'=>'Nombre de la Carrera']);
                    echo $this->Form->control('DESCRIPCION', ['type'=>'textarea','label'=>'Descripción']);
                    echo $this->Form->control('ESTADO', ['type'=>'checkbox', 'label'=>'Activa', 'checked'=>'checked']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
