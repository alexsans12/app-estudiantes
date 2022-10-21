<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Notas</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="container position-relative">
    <?=$this->Html->link('Regresar a reportes', ['controller'=>'reportes','action'=>'index'], ['class'=>'position-sticky top-0 start-0 translate-middle btn btn-danger mt-5'])?>
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
