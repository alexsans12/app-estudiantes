<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?=$this->Html->css('bootstrap.min.css', ['fullBase' => true])?>
    <?=$this->Html->css('home.css', ['fullBase' => true])?>
</head>
<body class="container" style="font-family: 'Raleway', sans-serif;">
    <div class="row justify-content-center">
        <div class="col-12 mt-5 mb-5">
            <div class="mb-3">
                <h2 class="display-4"><?= h('Estudiantes de ' . $carrera->NOMBRE) ?></h2>
            </div>
            <div class="related view content">
                <?php if (!empty($carrera->estudiante)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"><?= h('Id') ?></th>
                                <th scope="col"><?= h('Nombre') ?></th>
                                <th scope="col"><?= h('Fecha de Nacimiento') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carrera->estudiante as $estudiante): ?>
                            <tr>
                                <td><?= h($estudiante->ID_ESTUDIANTE) ?></td>
                                <td><?= h($estudiante->NOMBRE . ' ' . $estudiante->APELLIDO) ?></td>
                                <td><?= h($estudiante->FECHA_NACIMIENTO->nice()) ?></td>
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
