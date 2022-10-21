<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?=$this->Html->css('bootstrap.min.css', ['fullBase' => true])?>
    <?=$this->Html->css('home.css', ['fullBase' => true])?>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body class="container">
    <div class="row justify-content-center">
        <div class="col-12 mt-5 mb-5">
            <div class="mb-3">
                <h2 class="display-3"><?= h('Reporte de Observaciones') ?></h2>
                <div class="clearfix mt-3">
                    <?= $this->Html->image('fotografias/'.h($estudiante->FOTOGRAFIA), ['fullBase' => true, 'class'=>'col-sm-4 float-md-end mb-3 ms-md-3']) ?>
                    <div class="mb-3">
                        <label class="fw-bold fs-5">Nombre Completo</label>
                        <p class="fs-6"><?= h($estudiante->NOMBRE) ?> <?= h($estudiante->APELLIDO) ?></td></p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold fs-5"><?= __('Estudiante de la carrera de') ?></label>
                        <p class="fs-6"><?= h($estudiante->carrera->NOMBRE) ?></td></p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="related view content">
                <h2 class="display-4"><?= __('Observaciones') ?></h2>
                <?php if (!empty($estudiante->observacion)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"><?= h('Id') ?></th>
                                <th scope="col"><?= h('Observación') ?></th>
                                <th scope="col"><?= h('Tipo de Observación') ?></th>
                                <th scope="col"><?= h('Fecha') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estudiante->observacion as $observacion): ?>
                            <tr class="<?= h($observacion->TIPO) ? 'table-danger' : 'table-success' ?>">
                                <td><?= $this->Number->format($observacion->ID_OBSERVACION) ?></td>
                                <td><?= h($observacion->OBSERVACION) ?></td>
                                <td><?= h($observacion->TIPO) ? 'Advertencia' : 'Felicitación' ?></td>
                                <td><?= h($observacion->FECHA_OBSERVACION->nice()) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
