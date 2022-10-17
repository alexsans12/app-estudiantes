<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nota->ID_NOTAS],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nota->ID_NOTAS), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="notas form content">
            <?= $this->Form->create($nota) ?>
            <fieldset>
                <legend><?= __('Edit Nota') ?></legend>
                <?php
                    echo $this->Form->control('ID_CURSO');
                    echo $this->Form->control('ID_ESTUDIANTE');
                    echo $this->Form->control('NOTA');
                    echo $this->Form->control('APROBADO');
                    echo $this->Form->control('FECHA');
                    echo $this->Form->control('FECHA_MODIFICACION');
                    echo $this->Form->control('SECCION');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
