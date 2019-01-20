<?php

  $portfolio = [
    [
      'titulo' => 'Afactys',
      'texto' => 'Afactys es una red social para profesionales del arte, para promocionar su porfolio y facilitar relaciones sociales y de trabajo. Empezó como un proyecto entre amigos, una idea de pequeña envergadura que creció y creció, y que acabó consiguiendo financiación del Ministerio de Cultura para promover el trabajo de los actores.',
      'imgs' => [
        [
          'href' => 'afactys.png',
          'class' => 'landscape',
          'src' => 'afactys.png',
          'alt' => '',
        ]
      ]
    ],[
      'titulo' => 'Taxo',
      'texto' => 'Taxo es una compañía de tasaciones que necesitaba renovarse y cambiar las aplicaciones viejas de gestión por unas nuevas y más efectivas, no solo para la empresa sino también para los clientes externos. Taxo es ahora mi principal cliente y actualmente gestiono dos proyectos con ellos.',
      'imgs' => [
        [
          'href' => 'taxo.png',
          'class' => '',
          'src' => 'taxo.png',
          'alt' => '',
        ],
        // [
        //   'href' => 'delfos.png',
        //   'class' => '',
        //   'src' => 'delfos.png',
        //   'alt' => '',
        // ],
        [
          'href' => 'ulises.png',
          'class' => '',
          'src' => 'ulises.png',
          'alt' => '',
        ],
      ]
    ],[
      'titulo' => 'Marta Tornero',
      'texto' => 'He ayudado a Marta a construir dos páginas, Mtornero y Writermuse, una en Bootstrap y la otra en Wordpress. Mi mayor reto no fue hacerlas sino mi labor como profesor. Fue una mezcla de ideas de Marta y mías, pero los gifs animados de gatos no fueron cosa mía, por desgracia.',
      'imgs' => [
        [
          'href' => 'writermuse.png',
          'class' => '',
          'src' => 'writermuse.png',
          'alt' => '',
        ],[
          'href' => 'mtornero.png',
          'class' => '',
          'src' => 'mtornero.png',
          'alt' => '',
        ],
        // [
        //   'href' => 'inspire.png',
        //   'class' => '',
        //   'src' => 'inspire.png',
        //   'alt' => '',
        // ]
      ]
    ],[
      'titulo' => 'Black Bottom: Lindy Hop',
      'texto' => 'Black Bottom necesitaba una aplicación "sencilla" para gestionar los pagos de más de un millar de alumnos. Debí sospechar, lo que alguien llama "sencillo" rara vez lo es: la app de Black Bottom se expandió hasta abarcar asistencias, hojas de contabilidad, login de alumnos, subir vídeos para repasar en casa… Me enseñó flexibilidad y a ir un paso por delante.',
      'imgs' => [
        [
          'href' => 'blackbottom.jpg',
          'class' => 'landscape',
          'src' => 'blackbottom.jpg',
          'alt' => '',
        ]
      ]
    ],[
      'titulo' => 'Oclock',
      'texto' => 'Oclock era un equipo de trabajo donde dábamos vida a los deseos digitales de los clientes. Trabajamos con <b>Solivesa</b> con una aplicación de gestión de ventas de telecomunicaciones; con <b>Golftab</b> con una aplicación web y móvil para la gestión de escuelas de golf; creamos <b>Wopap</b> para gestionar e inventariar documentos y permitía almacenar toda tu información en la nube y <b>Neofit</b> es una aplicación para crear tus propias tablas de entrenamiento para el gimnasio.',
      'imgs' => [
        [
          'href' => 'solivesa.jpg',
          'class' => '',
          'src' => 'solivesa.jpg',
          'alt' => '',
        ],[
          'href' => 'wopap.jpg',
          'class' => '',
          'src' => 'wopap.jpg',
          'alt' => '',
        ],[
          'href' => 'golftab.png',
          'class' => '',
          'src' => 'golftab.png',
          'alt' => '',
        ],[
          'href' => 'neofit.png',
          'class' => '',
          'src' => 'neofit.png',
          'alt' => '',
        ]
      ]
    ],[
      'titulo' => 'Misc',
      'texto' => 'La vida del informático no para. Cuando tengo ratos libres me dedico a crear, ayudar o investigar en nuevos proyectos. <b>BEST</b> es una organización de Estudiantes de Tecnología a nivel europeo, donde fui responsable de IT. <b>Cuentónomo</b> es un proyecto personal que empezó como una aplicación para contar los ingresos y gastos que tenía siendo autónomo y acabó haciendo muchas cosas más.  <b>Ofersalud</b> fue un proyecto que empezamos unos amigos con una idea innovadora en el sector de la salud, pero nos compraron la idea y ahora no tiene nada que ver con sus inicios. <b>Vision10</b> es una productora valenciana a la que ayudé configurando servidores y gestionando correos y donde aprendí muchísimo.',
      'imgs' => [
        [
          'href' => 'cuentonomo.png',
          'class' => '',
          'src' => 'cuentonomo.png',
          'alt' => '',
        ],[
          'href' => 'vision10.png',
          'class' => '',
          'src' => 'vision10.png',
          'alt' => '',
        ],[
          'href' => 'ofersalud.png',
          'class' => '',
          'src' => 'ofersalud.png',
          'alt' => '',
        ],[
          'href' => 'best.png',
          'class' => '',
          'src' => 'best.png',
          'alt' => '',
        ],
        // [
        //   'href' => 'ecoproject.png',
        //   'class' => '',
        //   'src' => 'ecoproject.png',
        //   'alt' => '',
        // ]
      ]
    ]
  ];

?>

<section>
  <header>
    <h2>Portfolio</h2>
  </header>
  <div class="content">
    <p>Un breve repaso de las <b>empresas</b> por las que he pasado y los <b>programas</b> que he hecho:</p>

    <?php foreach ($portfolio as $p): ?>

      <section>
        <header>
          <h3><?=$p['titulo']?></h3>
          <p><?=$p['texto']?></p>
        </header>
        <div class="content">
          <div class="gallery">
            <?php foreach ($p['imgs'] as $i): ?>
              <a href="images/proj/<?=$i['href']?>" class="<?=$i['class']?>">
                <img src="images/proj/<?=$i['src']?>" alt="<?=$i['alt']?>" />
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

    <?php endforeach; ?>

  </div>
</section>
