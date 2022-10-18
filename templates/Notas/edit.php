<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $nota->ID_NOTAS],
                ['confirm' => __('Esta seguro de eliminar la nota con id # {0}?', $nota->ID_NOTAS), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listado de Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="notas form content">
            <?= $this->Form->create($nota) ?>
            <fieldset>
                <legend><?= __('Editando Nota') ?></legend>
                <?php
                    echo $this->Form->control('cursos._id', ['label' => 'Escoge un Curso', 'name' => 'ID_CURSO', 'options' => $cursos, 'default'=>$nota->ID_CURSO]);
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes, 'default'=>$nota->ID_ESTUDIANTE]);
                    echo $this->Form->control('NOTA', ['label' => 'Nota del Curso', 'maxlength'=>'3', 'min'=>'0', 'max'=>'100']);
                    echo $this->Form->control('APROBADO', ['label' => '¿El curso esta aprobado?']);
                    echo $this->Form->control('SECCION', ['label' => 'Sección', 'placeholder'=>'A...']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
