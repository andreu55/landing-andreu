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
    'img' => 'img/proj/golftab.png',
    'alt' => 'GolfTab',
    'title' => 'GolfTab, gestor de escuelas de Golf',
    'content' => 'GolfTab es una nueva app que permite a los jugadores conectarse con sus escuelas y sus profesores. Mediante GolfTab podrás anotar tus resultados y estudiar tus estadísticas pero también podrás comprobar si logras completar los objetivos puestos por tu profesor y visualizar tu mejora.',
    'social_url' => 'http://golf-tab.com/'
  ],[
    'img' => 'img/proj/inspire.png',
    'alt' => 'Inspire',
    'title' => 'Inspire, encuentra tu inspiración',
    'content' => 'Soy el content del modal 07',
    'social_url' => 'http://writermuse.es/'
  ],[
    'img' => 'img/proj/writermuse.png',
    'alt' => 'Writermuse',
    'title' => 'Writermuse, Escribe. Inspira',
    'content' => 'Soy el content del modal 08',
    'social_url' => 'http://writermuse.es/'
  ],[
    'img' => 'img/proj/mtornero.png',
    'alt' => 'Marta Tornero',
    'title' => 'Marta Tornero',
    'content' => 'Soy el content del modal 09',
    'social_url' => 'http://mtornero.com/'
  ],[
    'img' => 'img/proj/neofit.png',
    'alt' => 'NeoFit',
    'title' => 'NeoFit',
    'content' => 'Soy el content Neofit',
    'social_url' => 'http://neofit.info/'
  ],[
    'img' => 'img/proj/vision10.png',
    'alt' => 'Vision 10',
    'title' => 'Vision 10',
    'content' => 'Soy el Vision 10',
    'social_url' => 'http://www.vision10.es/'
  ],[
    'img' => 'img/proj/ofersalud.png',
    'alt' => 'Ofersalud',
    'title' => 'Ofersalud',
    'content' => 'Soy el ofersad',
    'social_url' => 'https://ofersalud.es/'
  ]
];

$total_arr = range(0, $total-1);
shuffle($total_arr);

// [[0] => 11 [1] => 1 [2] => 13 ... [17] => 12]

$data['rand'] = $total_arr;
$data['total'] = $total;
$data['total_real'] = count($data['portfolio']);
