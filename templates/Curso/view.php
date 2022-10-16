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
            <?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->ID_CURSO], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->ID_CURSO], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->ID_CURSO), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Curso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="curso view content">
            <h3><?= h($curso->ID_CURSO) ?></h3>
            <table>
                <tr>
                    <th><?= __('NOMBRE') ?></th>
                    <td><?= h($curso->NOMBRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('DESCRIPCION') ?></th>
                    <td><?= h($curso->DESCRIPCION) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID CURSO') ?></th>
                    <td><?= $this->Number->format($curso->ID_CURSO) ?></td>
                </tr>
                <tr>
                    <th><?= __('ESTADO') ?></th>
                    <td><?= $curso->ESTADO ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
