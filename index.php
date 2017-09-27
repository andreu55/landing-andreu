<?php

require_once __DIR__.'/vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);

// Aqui están los datos para pasar a la vista
require_once __DIR__.'/views/datos.php';
require_once __DIR__.'/views/functions.php';

echo asset('vendor/bootstrap/css/bootstrap.min.css');

// echo $blade->view()->make('welcome', $data)->render();
