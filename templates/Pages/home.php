<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

?>
<div class="container text-center">
    <h1 class="display-1">Bienvenido a la aplicacion de estudiantes</h1>
    <pre>
        <?=var_dump($_SERVER)?>
    </pre>
    <?=phpinfo()?>
</div>
