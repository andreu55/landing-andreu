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
      'texto' => 'Taxo es una compañía de tasaciones que necesitaba renovarse y cambiar las aplicaciones viejas de gestión por unas nuevas y más efectivas, no solo para la empresa sino también para los clientes externos. Taxo es ahora mi principal cliente y actualmente gestiono dos proyectos con ellos',
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
      'texto' => 'Mtornero es la página de porfolio de Marta Tornero, construida principalmente en Bootstrap. A primera vista es un proyecto sencillo, una página estática que podría haberse hecho sin programación, pero mi mayor aprendizaje fue convertirme en profesor. WriterMuse era una página de asesoría literaria y corrección desarrollada en Wordpress.',
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
      'titulo' => 'Black Bottom',
      'texto' => 'Black Bottom es una escuela de lindy hop que necesitaba gestionar los pagos de más de un millar de alumnos. Decidieron dejar de lado su anticuado sistema en papel y que les desarrollara una aplicación php sencilla en Laravel.',
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
      'texto' => 'Oclock era un equipo de trabajo donde dabamos vida a los deseos digitales de los clientes, trabajamos con Solivesa con una aplicación de gestión de ventas de telecomunicaciones, con Golftab con una aplicación web y móvil para la gestión de escuelas de golf. Wopap es una aplicación de gestión de documentos e inventariado que permite almacenar toda tu información en la nube y Neofit una aplicación para los gimnasios.',
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
      'texto' => 'La vida del informático no para, cuando tengo ratos libres me dedico a crear, ayudar o investigar en nuevos proyectos, BEST es una especie de organización sin fines de lucro de Estudiantes de Tecnología que se organizan a nivel europeo. Cuentónomo es un proyecto personal que empezó como una aplicación para contar los ingresos y los gastos que tenía siendo autónomo. Vision10 es una productora valenciana que nace en la década de los 90. Ofersalud fue un proyecto consistió en montar mi primera web',
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
    <p><strong>Integer mollis egestas</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>

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
