<div class="container container-fluid row justify-content-around align-items-center mb-5">
    <h2 class="display-1 col-12">Reportes</h2>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 540px">
        <legend class="mb-1"><h3><?= __('Reporte de Incidencias por Estudiante') ?></h3></legend>
        <?= $this->Form->create($estudiante, ['url'=>['action'=>'observaciones'], 'type'=>'post', 'class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('estudiantes._id', ['label' => 'Escoge un Estudiante', 'name' => 'ID_ESTUDIANTE', 'options' => $estudiantes]);
                ?>
            </div>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <fieldset class="content col p-5 me-4 mb-4" style="max-width: 540px">
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
    <hr/>
    <fieldset class="content col p-5 me-4 mb-4">
        <legend class="mb-1"><h3><?= __('Reporte de Notas de Estudiantes') ?></h3></legend>
        <?= $this->Form->create($nota, ['url'=>['action'=>'notas'], 'type'=>'post', 'class'=>'row']) ?>
            <div class="col">
                <?php
                    echo $this->Form->control('observacion', ['label' => 'Escoge una Seccion', 'name' => 'SECCION', 'options' => $secciones]);
                ?>
            </div>
            <div class="col">
                <?php
                    echo $this->Form->control('curso._id', ['label' => 'Escoge un Curso', 'name' => 'ID_CURSO', 'options' => $cursos]);
                ?>
            </div>
            <?php
                    echo $this->Form->control('notas._id', ['label' => 'Escoge una Carrera', 'name' => 'ID_CARRERA', 'options' => $carreras]);
            ?>
            <?= $this->Form->button(__('Generar Reporte')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
