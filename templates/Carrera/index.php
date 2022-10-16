<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carrera> $carrera
 */
?>
<div class="carrera index content">
    <?= $this->Html->link(__('Nueva Carrera'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carrera') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Descripción') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrera as $carrera): ?>
                <tr>
                    <td><?= $this->Number->format($carrera->ID_CARRERA) ?></td>
                    <td><?= h($carrera->NOMBRE) ?></td>
                    <td><?= h($carrera->DESCRIPCION) ?></td>
                    <td><?= h($carrera->ESTADO ? __('Activa') : __('Inactiva')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->ID_CARRERA]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carrera->ID_CARRERA]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->ID_CARRERA)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
