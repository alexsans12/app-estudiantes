<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Curso> $curso
 */
?>
<div class="curso index content">
    <?= $this->Html->link(__('Agregar un Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cursos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_CURSO', 'Id') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE', 'Nombre') ?></th>
                    <th><?= $this->Paginator->sort('DESCRIPCION','Descripción') ?></th>
                    <th><?= $this->Paginator->sort('ID_SEMESTRE','Semestre') ?></th>
                    <th><?= $this->Paginator->sort('ESTADO', 'Estado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?= $this->Number->format($curso->ID_CURSO) ?></td>
                    <td><?= h($curso->NOMBRE) ?></td>
                    <td><?= h($curso->DESCRIPCION) ?></td>
                    <td><?= h($semestres[$curso->ID_SEMESTRE]) ?></td>
                    <td><?= h($curso->ESTADO ? __('Activa') : __('Inactiva')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $curso->ID_CURSO]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $curso->ID_CURSO]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $curso->ID_CURSO], ['confirm' => __('Estas seguro que quieres borrar el curso con id # {0}?', $curso->ID_CURSO)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('inicio')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagína {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
    </div>
</div>
