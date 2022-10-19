<div class="container container-fluid row justify-content-between align-items-center mb-5">
    <h2 class="display-1 col-12">Reportes</h2>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 450px">
        <legend class="mb-1"><h3><?= __('Reporte de Incidencias por Estudiante') ?></h3></legend>
        <?= $this->Form->create($estudiante, ['url'=>['action'=>'observaciones', '?'=>['download'=>1]], 'type'=>'post', 'class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes]);
                ?>
            </div>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 450px">
        <legend class="mb-1"><h3><?= __('Reporte de Estudiantes por Carrera') ?></h3></legend>
        <?= $this->Form->create($carrera, ['url'=>['action'=>'estudiantes'], 'type'=>'post', 'class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('carreras._id', ['label' => 'Escoge una Carrera', 'name' => 'ID_CARRERA', 'options' => $carreras]);
                ?>
            </div>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <h2 class="display-1 col-12 mt-5">Reportes de Notas</h2>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 450px">
        <legend class="mb-1"><h3><?= __('Reporte de Incidencias por Estudiante') ?></h3></legend>
        <?= $this->Form->create($estudiante, ['class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes]);
                ?>
            </div>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 450px">
        <legend class="mb-1"><h3><?= __('Reporte de Estudiantes por Carrera') ?></h3></legend>
        <?= $this->Form->create($carrera, ['class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('carreras._id', ['label' => 'Escoge una Carrera', 'name' => 'ID_CARRERA', 'options' => $carreras]);
                ?>
            </div>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
