<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Semestre> $semestre
 */
?>
<div class="semestre index content">
    <?= $this->Html->link('<i class="bi bi-plus-circle"></i>', ['action' => 'add'], ['class'=>'btn btn-primary float-right fs-2 px-5 px-2', 'escape'=>false]) ?>
    <h3><?= __('Semestres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_SEMESTRE', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE','Nombre del Semestre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($semestres as $semestre):
                ?>
                <tr>
                    <td><?= $this->Number->format($semestre->ID_SEMESTRE) ?></td>
                    <td><?= h($semestre->NOMBRE) ?></td>
                    <td class="actions btn-group">
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $semestre->ID_SEMESTRE], ['class'=>'btn btn-warning fs-3 p-3 text-dark', 'escape'=>false]) ?>
                        <?= $this->Form->postLink('<i class="bi bi-trash3"></i>', ['action' => 'delete', $semestre->ID_SEMESTRE], ['confirm' => __('Esta seguro de eliminar el semestre con id # {0}?', $semestre->ID_SEMESTRE), 'class'=>'btn btn-danger fs-3 p-3 text-light', 'escape'=>false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagína {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
    </div>
</div>
