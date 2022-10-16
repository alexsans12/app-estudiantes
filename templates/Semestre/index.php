<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Semestre> $semestre
 */
?>
<div class="semestre index content">
    <?= $this->Html->link(__('Agregar Semestre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Semestre') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Carrera') ?></th>
                    <th><?= $this->Paginator->sort('Curso') ?></th>
                    <th><?= $this->Paginator->sort('Semestre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($semestres as $semestre):
                ?>
                <tr>
                    <td><?= $this->Number->format($semestre->ID_SEMESTRE) ?></td>
                    <td><?= $carreras[$semestre->ID_CARRERA] ?></td>
                    <td><?= $cursos[$semestre->ID_CURSO] ?></td>
                    <td><?= h($semestre->CODIGO_SEMESTRE) ?></td>
                    <td class="actions btn-group">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $semestre->ID_SEMESTRE]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $semestre->ID_SEMESTRE]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $semestre->ID_SEMESTRE], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->ID_SEMESTRE)]) ?>
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
