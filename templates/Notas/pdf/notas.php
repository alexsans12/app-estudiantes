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
                <h2 class="h1"><?= h('Notas de ' . $carrera->NOMBRE) ?></h2>
                <h3 class="h3 fw-bold mt-3 mb-3"><?=$curso->NOMBRE ?>, <?= h('Sección ' . $seccion) ?></h3>
            </div>
            <div class="related view content">
                <?php if (!empty($query)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"><?= h('Id') ?></th>
                                <th scope="col"><?= h('Nombre') ?></th>
                                <th scope="col"><?= h('Punteo') ?></th>
                                <th scope="col"><?= h('Estado') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $estudiante): ?>
                            <tr>
                                <td><?= h($estudiante[0]) ?></td>
                                <td><?= h($estudiante[3]) ?></td>
                                <td><?= h($estudiante[1]) ?></td>
                                <td><?= h($estudiante[2] ? 'Aprobado' : 'Reprobado') ?></td>
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
