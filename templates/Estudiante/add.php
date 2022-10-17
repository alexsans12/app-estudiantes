<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listado de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante form content">
            <?= $this->Form->create($estudiante, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Agregar Estudiante') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE', ['label'=>'Nombre']);
                    echo $this->Form->control('APELLIDO', ['label'=>'Apellido']);
                    echo $this->Form->control('FOTOGRAFIA', ['label'=>'Fotografía', 'type'=>'file', 'required'=>false]);
                    echo $this->Form->control('carreras._id', ['label' => 'Escoge una Carrera', 'name' => 'ID_CARRERA', 'options' => $carreras]);
                    echo $this->Form->control('FECHA_NACIMIENTO', ['label'=>'Fecha de Nacimiento']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
