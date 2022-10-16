<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Carrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
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
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
