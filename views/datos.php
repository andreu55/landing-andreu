<?php

$total = 18;

$data['portfolio'] = [
  [
    'img' => 'img/proj/afactys.png',
    'alt' => 'Afactys Artistas',
    'title' => 'Afactys, Red Social de Profesionales del Arte y la Cultura',
    'content' => 'Red Social de Profesionales del Arte y la Cultura. En ella encontraréis las herramientas necesarias para poder difundir todos vuestros trabajos y proyectos',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/blackbottom.jpg',
    'alt' => 'Black Bottom, Lindy Hop',
    'title' => 'Black Bottom Lindy Hop',
    'content' => 'Soy el content del modal 02',
    'social_url' => 'http://www.blackbottom.es/'
  ],[
    'img' => 'img/proj/taxovaloracion.jpg',
    'alt' => 'Taxo Valoración',
    'title' => 'Taxo Valoración',
    'content' => 'Soy el content del modal 03',
    'social_url' => 'https://taxo.es/'
  ],[
    'img' => 'img/proj/solivesa.jpg',
    'alt' => 'Grupo Solivesa',
    'title' => 'Grupo Solivesa',
    'content' => 'Soy el content del modal 04',
    'social_url' => 'http://www.gruposolivesa.com/'
  ],[
    'img' => 'img/proj/wopap.jpg',
    'alt' => 'Wopap',
    'title' => 'Wopap, without papers',
    'content' => 'Soy el content del modal 05',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/6.png',
    'alt' => '06',
    'title' => 'Soy el modal 06',
    'content' => 'Soy el content del modal 06',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/7.png',
    'alt' => '07',
    'title' => 'Soy el modal 07',
    'content' => 'Soy el content del modal 07',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/8.png',
    'alt' => '08',
    'title' => 'Soy el modal 08',
    'content' => 'Soy el content del modal 08',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/9.png',
    'alt' => '09',
    'title' => 'Soy el modal 09',
    'content' => 'Soy el content del modal 09',
    'social_url' => 'https://afactys.com/'
  ],[
    'img' => 'img/proj/10.png',
    'alt' => '10',
    'title' => 'Soy el modal 10',
    'content' => 'Soy el content del modal 10',
    'social_url' => 'https://afactys.com/'
  ]
];

$total_arr = range(0, $total-1);
shuffle($total_arr);

// [[0] => 11 [1] => 1 [2] => 13 ... [17] => 12]

$data['rand'] = $total_arr;
$data['total'] = $total;
$data['total_real'] = count($data['portfolio']);
