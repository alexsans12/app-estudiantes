<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre $semestre
 */
?>
<div class="row mb-5">
    <aside class="col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listado de Semestres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="col">
        <div class="semestre form content">
            <?= $this->Form->create($semestre) ?>
            <fieldset>
                <legend><?= __('Agregar Semestre') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE',['label'=>'Nombre del Semestre']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
