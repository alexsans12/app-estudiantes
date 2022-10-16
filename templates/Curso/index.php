<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Curso> $curso
 */
?>
<div class="curso index content">
    <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Curso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_CURSO') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE') ?></th>
                    <th><?= $this->Paginator->sort('DESCRIPCION') ?></th>
                    <th><?= $this->Paginator->sort('ESTADO') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($curso as $curso): ?>
                <tr>
                    <td><?= $this->Number->format($curso->ID_CURSO) ?></td>
                    <td><?= h($curso->NOMBRE) ?></td>
                    <td><?= h($curso->DESCRIPCION) ?></td>
                    <td><?= h($curso->ESTADO) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $curso->ID_CURSO]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->ID_CURSO]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->ID_CURSO], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->ID_CURSO)]) ?>
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
