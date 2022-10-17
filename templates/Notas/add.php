<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listado de Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="notas form content">
            <?= $this->Form->create($nota) ?>
            <fieldset>
                <legend><?= __('Agregar Nota') ?></legend>
                <?php
                    echo $this->Form->control('cursos._id', ['label' => 'Escoge un Curso', 'name' => 'ID_CURSO', 'options' => $cursos]);
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes]);
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
