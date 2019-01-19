<?php

$cuadrados_totales = 21; // Cuantos queremos que hayan (multiplos de 3)
$cuadrados_repetidos = 3; // Las que se repiten arriba y abajo
$total = $cuadrados_totales - $cuadrados_repetidos;

$data['portfolio'] = [
  [ // 0
    'img' => 'img/proj/afactys.png',
    'alt' => 'Afactys Artistas',
    'title' => 'Afactys, Red Social de Profesionales del Arte y la Cultura',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Afactys es una red social para profesionales del arte, para promocionar su porfolio y facilitar relaciones sociales y de trabajo. Empezó como un proyecto entre amigos, una idea de pequeña envergadura que creció y creció, y que acabó consiguiendo financiación del Ministerio de Cultura para promover el trabajo de los actores.</p>
      <p>Cuando ahora me frustro intentando hacer cosas nuevas, me acuerdo de que cuando empecé con Afactys no sabía nada y tenía que consultar la documentación hasta para mandar un formulario. Era frustrante, pero también muy satisfactorio.</p>
      <p>Fue mi primer proyecto en php con Codeigniter y fue el momento en que me di cuenta de que me quedaba mucho que aprender.</p>
      <p>Programé todo Afactys, desde la validación de los correos hasta la estructura de la base de datos, y por eso le tengo un cariño especial: me enseñó que para ser un buen programador hay que lanzarse a la piscina porque si no nunca sabrás hacer nada.</p>',
    'social_url' => 'https://afactys.com/'
  ],[ // 1
    'img' => 'img/proj/blackbottom.jpg',
    'alt' => 'Black Bottom, Lindy Hop',
    'title' => 'Black Bottom Lindy Hop',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Black Bottom es una escuela de lindy hop que necesitaba gestionar los pagos de más de un millar de alumnos. Decidieron dejar de lado su anticuado sistema en papel y que les desarrollara una aplicación php sencilla en Laravel.</p>
      <p>Debí sospechar, lo que alguien llama «sencillo» rara vez lo es: la app de Black Bottom se expandió hasta abarcar asistencias, hojas de contabilidad, login de alumnos, subidas de vídeos para que pudieran repasar en casa…</p>
      <p>Fue una experiencia muy provechosa: ahora siempre programo las aplicaciones para que admitan mucho más de lo que se había pensado en un principio.</p>',
    'social_url' => 'http://www.blackbottom.es/'
  ],[ // 2
    'img' => 'img/proj/taxo.png',
    'alt' => 'Taxo Valoración',
    'title' => 'Taxo Valoración',
    'content' => '<em>Full Stack Developer – Project Manager</em><br>
      <p>Taxo es una compañía de tasaciones que me contrató a mí y a otros miembros de mi equipo para empezar su andadura digital.</p>
      <p>Necesitaba renovarse y cambiar las aplicaciones viejas de gestión por unas nuevas y más efectivas, no solo para la empresa sino también para los clientes externos, pero hasta que presentamos las nuevas apps transcurrió un periodo oscuro en que mi trabajo consistió sobre todo en deshacer marañas de código y solucionar líos.</p>
      <p>Taxo es ahora mi principal cliente y actualmente gestiono dos proyectos con ellos:</p>
      <p><b>valoracion.taxo.es</b></p>
      <p>Aplicación web en php desde donde entran los pedidos de tasaciones, habilitada para realizar pagos mediante transferencia y paypal.</p>',
    'social_url' => 'https://taxo.es/'
  ],[ // 3
    'img' => 'img/proj/solivesa.jpg',
    'alt' => 'Grupo Solivesa',
    'title' => 'Grupo Solivesa',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Solivesa es una aplicación de gestión de ventas de telecomunicaciones (utilizada principalmente para Vodafone) y de contratos de energéticas (Enérgya VM), pensada para el uso de los comerciales y el equipo de soporte técnico para coordinar y agilizar su trabajo.</p>
      <p>Trabajé junto con un equipo de 3 personas en la creación y expansión de Solivesa en php puro.</p>
      <p>También hicimos una Applicación nativa para SmartPhones con ionic Framework para el front y con Laravel para el Back</p>',
    'social_url' => 'http://www.gruposolivesa.com/'
  ],[ // 4
    'img' => 'img/proj/wopap.jpg',
    'alt' => 'Wopap',
    'title' => 'Wopap, without papers',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Wopap es una aplicación de gestión de documentos e inventariado que permite almacenar toda tu información en la nube y compartirla con quien tú quieras en diferentes grados de acceso. La idea de Wopap era eliminar los molestos documentos en papel y permitirte acceder a tu información desde donde la necesites.</p>
      <p>Desarrollamos Wopap primero en Laravel al completo, pero después vimos que estábamos limitados y después volvimos a empezarla creando una API en Laravel y una APP en Ionic, para adaptarlo a las necesidades cambiantes del entorno de trabajo y permitir la carga asíncrona de archivos.</p>
      <p>Desde Wopap desarrollamos también Wopap Empresas, para agilizar el trabajo de la sección de recursos humanos: gestión de trabajadores, creación y envío de facturas, contratos y otros documentos.</p>',
    'social_url' => 'https://afactys.com/'
  ],[ // 5
    'img' => 'img/proj/golftab.png',
    'alt' => 'GolfTab',
    'title' => 'GolfTab, gestor de escuelas de Golf',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Golftab es una aplicación web y móvil para la gestión de escuelas de golf en la nube, y para que los jugadores puedan evaluar su progreso en línea con la escuela y su profesor y reservar clases. Se ha expandido para incluso llegar a sustituir las tarjetitas de cartón donde se anotan los resultados: lo querían todo en línea, de fácil acceso y con posibilidad de monetización.</p>
      <p>Desde Golftab surgió una nueva aplicación, FGranks para gestionar partidos de golf, eventos, torneos, calificaciones, etc. a nivel mundial.</p>
      <p>Éramos cuatro personas en el equipo de desarrollo, más los programadores que vinieron antes que nosotros, por lo que Golftab contribuyó bastante a que aprendiera a trabajar en equipos medianos, dividir el trabajo y aunar nuestros esfuerzos de forma efectiva. También aprendí que el golf tiene más miga de lo que parece, la forma de clasificar es diferente en cada país con el dolor de cabeza que suponen las excepciones para un programador.</p>',
    'social_url' => 'http://golf-tab.com/'
  ],
  // [ // 6
  //   'img' => 'img/proj/inspire.png',
  //   'alt' => 'Inspire',
  //   'title' => 'Inspire, encuentra tu inspiración',
  //   'content' => '<em>Full Stack Developer</em><br>
  //     <p>Inspire es una aplicación web en desarrollo con Laravel y Vue, Se trata de un proyecto personal que nació de una pregunta: «¿podemos nutrir la creatividad con palabras aleatorias?» Lo aleatorio tiene la virtud de romper los moldes rígidos del cerebro que impiden la entrada de nuevas ideas o la reestructuración de patrones existentes.</p>
  //     <p>Ya hay aplicaciones y webs que ofrecen palabras aleatorias, pero ninguna que se adapte a las necesidades concretas de los escritores, ni tampoco que permitan vincular aleatoriamente ideas que el usuario introduce en el sistema.</p>
  //     <p>La primera idea la tuvo Marta, mi pareja, pero pronto vimos todo el potencial que podía tener y aún seguimos trabajando en ella; es uno de los peligros de estar demasiado inspirado: no se te acaban las ideas.</p>',
  //   'social_url' => 'http://writermuse.es/'
  // ],
  [ // 7
    'img' => 'img/proj/writermuse.png',
    'alt' => 'Writermuse',
    'title' => 'Writermuse, Escribe. Inspira',
    'content' => '<em>Full Stack Developer</em><br>
      <p>WriterMuse es una página de asesoría literaria y corrección desarrollada en Wordpress.</p>
      <p>No suelo trabajar en Wordpress porque «ya está todo hecho», pero no todo es tan sencillo como parece, y cuando buscas programar algo que se sale de lo previsto por la plataforma es necesario adentrarse en una selva de código de la que poca gente ha conseguido escapar.</p>
      <p>Fue un proyecto divertido, donde actualicé mis conocimientos de Wordpress y descubrí que a mí lo que me gusta es solucionar problemas y optimizar código.</p>',
    'social_url' => 'http://writermuse.es/'
  ],[ // 8
    'img' => 'img/proj/mtornero.png',
    'alt' => 'Marta Tornero',
    'title' => 'Marta Tornero',
    'content' => '<em>FrontEnd Developer - Profesor</em><br>
      <p>Mtornero es la página de porfolio de Marta Tornero, construida principalmente en Bootstrap</p>
      <p>A primera vista es un proyecto sencillo, una página estática que podría haberse hecho sin programación, pero mi mayor aprendizaje fue convertirme en profesor, porque buena parte de la página la hizo ella con mis instrucciones y con algunas ideas mías.</p>
      <p>Los gifs animados de gatos no fueron cosa mía, por desgracia.</p>',
    'social_url' => 'http://mtornero.com/'
  ],[ // 9
    'img' => 'img/proj/neofit.png',
    'alt' => 'NeoFit',
    'title' => 'NeoFit',
    'content' => '<em>FrontEnd Developer</em><br>
      <p>En construcción</p>',
    'social_url' => 'http://neofit.info/'
  ],[ // 10
    'img' => 'img/proj/vision10.png',
    'alt' => 'Vision 10',
    'title' => 'Vision 10',
    'content' => '<em>FrontEnd Developer</em><br>
      <p>Otro de los lugares donde he aprendido muchísimo, Vision10 es una productora valenciana que nace en la década de los 90, mi estancia allí estuvo llena de pequeños y grandes proyectos, configuraciones de servidores y gestores de correos.</p>
      <p>Buenos tiempos y muy buena gente.</p>',
    'social_url' => 'http://www.vision10.es/'
  ],[ // 11
    'img' => 'img/proj/ofersalud.png',
    'alt' => 'Ofersalud',
    'title' => 'Ofersalud',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Ofersalud fue un proyecto bonico que empezamos un pequeño grupo de amigos y del que poco queda actualmente, fue de mis primeros proyectos serios y consistió en montar una web donde Los
      clientes pudieran comprar, navegar e informarse de lo que ofrecíamos.</p>
      <p>Hablo en pasado porque nos compraron la idea, se perdió la esencia, se hizo mas caro y (en mi opinión) fue todo al traste.</p>
      <p>Pero, eso sí, aprendí un montón. :)</p>',
    'social_url' => 'https://ofersalud.es/'
  ],[ // 12
    'img' => 'img/proj/ecoproject.png',
    'alt' => 'Eco Projectes',
    'title' => 'Eco Projectes',
    'content' => '<em>FrontEnd Developer</em><br>
      <p>En construcción</p>',
    'social_url' => 'http://eco-project.es/'
  ],[ // 13
    'img' => 'img/proj/best.png',
    'alt' => 'Best Valencia',
    'title' => 'Best Valencia',
    'content' => '<em>Project Manager - IT Responsible</em><br>
      <p>BEST es una especie de organización sin fines de lucro de Estudiantes de Tecnología que se organizan a nivel europeo.</p>
      <p>Ofrece oportunidades de comunicación, cooperación e intercambio a través de cursos y competencias de ingeniería que amplian sus conocimientos en temas que complementan su educación de ingeniería.</p>
      <p>Esto también crea el contexto en el cual los miembros de la organización pueden compartir conocimiento y ganar experiencia organizando estos eventos.</p>',
    'social_url' => 'http://blog.bestvalencia.org/'
  ],[ // 14
    'img' => 'img/proj/cuentonomo.png',
    'alt' => 'Cuentónomo',
    'title' => 'Cuentónomo | Cuentas fáciles para los autónomos',
    'content' => '<em>Full Stack Developer</em><br>
      <p>Cuentónomo es un proyecto personal que empezó como una aplicación sin ni siquiera base de datos para contar los ingresos y los gastos que tenía siendo autónomo y
      calcularme automáticamente los desgraves y lo que tenía que ingresar de IVA en cada trimestre.</p>
      <p>Algunos amigos que vieron me dijeron que estaba muy bien y que porqué no la ofrecía al público, así que la cambié para que utilizara una base de datos e hice los cambios necesarios para adaptarla.</p>
      <p>Actualmente sigue en proceso de expansión, voy añadiendo nuevas ideas cuando saco un poco de tiempo!</p>',
    'social_url' => 'https://cuentonomo.com/'
  ],[ // 15
    'img' => 'img/proj/ulises.png',
    'alt' => 'Ulises Taxo',
    'title' => 'Ulises | Gestión integral de trabajos y facturación',
    'content' => '<em>Back End Developer</em><br>
      <p></p>',
    'social_url' => 'https://ulises.taxo.es/'
  ],[ // 16
    'img' => 'img/proj/delfos.png',
    'alt' => 'Delfos Taxo',
    'title' => 'Delfos | Gestión de empleados',
    'content' => '<em>Back End Developer</em><br>
      <p>Delfos es una aplicación web de gestión interna desde la cual los encargados de personal llevan a cabo búsquedas de tasadores y consultas de documentos. Dirigí el desarrollo de la aplicación en Angular e hice la API en Laravel.</p>',
    'social_url' => 'https://delfos.taxo.es/'
  ]
];

$total_arr = range(0, $total-1);
shuffle($total_arr);

// [[0] => 11 [1] => 1 [2] => 13 ... [17] => 12]

$data['rand'] = $total_arr;
$data['total'] = $total;
$data['total_real'] = count($data['portfolio']);
