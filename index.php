<?php

require_once __DIR__.'/vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);

// Aqui están los datos para pasar a la vista
require_once 'views/data.php';
require_once 'views/functions.php';


echo $blade->view()->make('welcome', $data)->render();
