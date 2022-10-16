<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre $semestre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Semestre'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semestre form content">
            <?= $this->Form->create($semestre) ?>
            <fieldset>
                <legend><?= __('Add Semestre') ?></legend>
                <?php
                    echo $this->Form->control('carreras.id', ['label' => 'Escoge una Carrera', 'name' => 'ID_CARRERA', 'options' => $carreras]);
                    echo $this->Form->control('cursos.id', ['label' => 'Escoge un Curso', 'name' => 'ID_CURSO', 'options' => $cursos]);
                    echo $this->Form->control('CODIGO_SEMESTRE');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
