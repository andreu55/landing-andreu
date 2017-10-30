<?php

$total = 18;

$data['portfolio'] = [
  [
    'url' => '#',
    'img' => 'isometric/img/Dribbble/1.png',
    'alt' => 'Afactys',
    'title' => 'Afactys Red Social de Profesionales del Arte y la Cultura',
    'content' => 'Red Social de Profesionales del Arte y la Cultura. En ella encontraréis las herramientas necesarias para poder difundir todos vuestros trabajos y proyectos',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/2.png',
    'alt' => '02',
    'title' => 'Soy el modal 02',
    'content' => 'Soy el content del modal 02',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/3.png',
    'alt' => '03',
    'title' => 'Soy el modal 03',
    'content' => 'Soy el content del modal 03',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/4.png',
    'alt' => '04',
    'title' => 'Soy el modal 04',
    'content' => 'Soy el content del modal 04',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/5.png',
    'alt' => '05',
    'title' => 'Soy el modal 05',
    'content' => 'Soy el content del modal 05',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/6.png',
    'alt' => '06',
    'title' => 'Soy el modal 06',
    'content' => 'Soy el content del modal 06',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/7.png',
    'alt' => '07',
    'title' => 'Soy el modal 07',
    'content' => 'Soy el content del modal 07',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/8.png',
    'alt' => '08',
    'title' => 'Soy el modal 08',
    'content' => 'Soy el content del modal 08',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/9.png',
    'alt' => '09',
    'title' => 'Soy el modal 09',
    'content' => 'Soy el content del modal 09',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ],[
    'url' => '#',
    'img' => 'isometric/img/Dribbble/10.png',
    'alt' => '10',
    'title' => 'Soy el modal 10',
    'content' => 'Soy el content del modal 10',
    'atype' => 'six',
    'social_url' => 'https://afactys.com/'
  ]
];

$total_arr = range(0, $total-1);
shuffle($total_arr);

// [[0] => 11 [1] => 1 [2] => 13 ... [17] => 12]

$data['rand'] = $total_arr;
$data['total'] = $total;
$data['total_real'] = count($data['portfolio']);
