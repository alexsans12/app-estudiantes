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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $semestre->ID_SEMESTRE],
                ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->ID_SEMESTRE), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Semestre'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semestre form content">
            <?= $this->Form->create($semestre) ?>
            <fieldset>
                <legend><?= __('Edit Semestre') ?></legend>
                <?php
                    echo $this->Form->control('ID_CARRERA');
                    echo $this->Form->control('ID_CURSO');
                    echo $this->Form->control('CODIGO_SEMESTRE');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
