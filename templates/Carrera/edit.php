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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrera->ID_CARRERA],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->ID_CARRERA), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carrera form content">
            <?= $this->Form->create($carrera) ?>
            <fieldset>
                <legend><?= __('Edit Carrera') ?></legend>
                <?php
                    echo $this->Form->control('NOMBRE');
                    echo $this->Form->control('DESCRIPCION');
                    echo $this->Form->control('ESTADO');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
