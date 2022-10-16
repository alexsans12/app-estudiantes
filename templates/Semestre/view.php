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
            <?= $this->Html->link(__('Edit Semestre'), ['action' => 'edit', $semestre->ID_SEMESTRE], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Semestre'), ['action' => 'delete', $semestre->ID_SEMESTRE], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->ID_SEMESTRE), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Semestre'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Semestre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semestre view content">
            <h3><?= h($semestre->ID_SEMESTRE) ?></h3>
            <table>
                <tr>
                    <th><?= __('CODIGO SEMESTRE') ?></th>
                    <td><?= h($semestre->CODIGO_SEMESTRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID SEMESTRE') ?></th>
                    <td><?= $this->Number->format($semestre->ID_SEMESTRE) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID CARRERA') ?></th>
                    <td><?= $this->Number->format($semestre->ID_CARRERA) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID CURSO') ?></th>
                    <td><?= $this->Number->format($semestre->ID_CURSO) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Carrera') ?></h4>
                <?php if (!empty($semestre->Carrera)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID CARRERA') ?></th>
                            <th><?= __('NOMBRE') ?></th>
                            <th><?= __('DESCRIPCION') ?></th>
                            <th><?= __('ESTADO') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($semestre->Carrera as $carrera) : ?>
                        <tr>
                            <td><?= h($carrera->ID_CARRERA) ?></td>
                            <td><?= h($carrera->NOMBRE) ?></td>
                            <td><?= h($carrera->DESCRIPCION) ?></td>
                            <td><?= h($carrera->ESTADO) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Carrera', 'action' => 'view', $carrera->ID_CARRERA]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Carrera', 'action' => 'edit', $carrera->ID_CARRERA]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carrera', 'action' => 'delete', $carrera->ID_CARRERA], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->ID_CARRERA)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Curso') ?></h4>
                <?php if (!empty($semestre->Curso)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID CURSO') ?></th>
                            <th><?= __('NOMBRE') ?></th>
                            <th><?= __('DESCRIPCION') ?></th>
                            <th><?= __('ESTADO') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($semestre->Curso as $curso) : ?>
                        <tr>
                            <td><?= h($curso->ID_CURSO) ?></td>
                            <td><?= h($curso->NOMBRE) ?></td>
                            <td><?= h($curso->DESCRIPCION) ?></td>
                            <td><?= h($curso->ESTADO) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Curso', 'action' => 'view', $curso->ID_CURSO]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Curso', 'action' => 'edit', $curso->ID_CURSO]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Curso', 'action' => 'delete', $curso->ID_CURSO], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->ID_CURSO)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
