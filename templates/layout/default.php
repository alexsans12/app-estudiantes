<?php

$cakeDescription = 'Aplicación de Estudiantes';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light top-nav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>" class="navbar-brand"><span>App</span>Estudiantes</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="flex-grow: 0;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-nav-links">
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Estudiantes'), ['controller'=>'estudiante', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Notas'), ['controller'=>'notas', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Observaciones'), ['controller'=>'observacion', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Cursos'), ['controller'=>'curso', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Carreras'), ['controller'=>'carrera', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                    <li class="nav-item" style="margin-bottom: 0;">
                        <?= $this->Html->link(__('Semestres'), ['controller'=>'semestre', 'action' => 'index'], ['class'=>'nav-link']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
