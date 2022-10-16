<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curso->ID_CURSO],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curso->ID_CURSO), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Curso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="curso form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Edit Curso') ?></legend>
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
