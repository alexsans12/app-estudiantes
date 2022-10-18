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
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $curso->ID_CURSO],
                ['confirm' => __('Estas seguro de borrar el curso con id # {0}?', $curso->ID_CURSO), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listado de Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="curso form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Editando Curso') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE' , ['label'=>'Nombre del Curso']);
                    echo $this->Form->control('DESCRIPCION', ['type'=>'textarea','label'=>'Descripción']);
                    echo $this->Form->control('semestres.ID_SEMESTRE', ['label' => 'Escoge un Semestre', 'name' => 'ID_SEMESTRE', 'options' => $semestres, 'default'=>$curso->ID_SEMESTRE]);
                    echo $this->Form->control('ESTADO', ['type'=>'checkbox', 'label'=>'Activa']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
