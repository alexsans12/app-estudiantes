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
            <?= $this->Html->link(__('Listado de Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="curso form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Agregar Curso') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE' , ['label'=>'Nombre del Curso']);
                    echo $this->Form->control('DESCRIPCION', ['type'=>'textarea','label'=>'Descripción']);
                    echo $this->Form->control('semestres.ID_SEMESTRE', ['label' => 'Escoge un Semestre', 'name' => 'ID_SEMESTRE', 'options' => $semestres]);
                    echo $this->Form->control('ESTADO', ['type'=>'checkbox', 'label'=>'Activa', 'checked'=>'checked']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
