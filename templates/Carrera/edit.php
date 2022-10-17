<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $carrera->ID_CARRERA],
                ['confirm' => __('Esta seguro de borrar la carrera con id # {0}?', $carrera->ID_CARRERA), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listado de Carreras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carrera form content">
            <?= $this->Form->create($carrera) ?>
            <fieldset>
                <legend><?= __('Editando Carrera') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE', ['label'=>'Nombre de la Carrera']);
                    echo $this->Form->control('DESCRIPCION', ['type'=>'textarea','label'=>'Descripción']);
                    echo $this->Form->control('ESTADO', ['type'=>'checkbox', 'label'=>'Activa']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
