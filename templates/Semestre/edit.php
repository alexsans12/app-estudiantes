<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre $semestre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $semestre->ID_SEMESTRE],
                ['confirm' => __('Esta seguro de eliminar el semestre con id # {0}?', $semestre->ID_SEMESTRE), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listado de Semestres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semestre form content">
            <?= $this->Form->create($semestre) ?>
            <fieldset>
                <legend><?= __('Editando Semestre') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE', ['label'=>'Nombre del Semestre']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
