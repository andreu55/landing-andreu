<div class="container">
  <!-- row -->
  <div class="row">
      <aside class="col l4 m12 s12 sidebar z-depth-1 hide-on-small-only" id="sidebar">
          <div class="row">
              <div class="heading">
                  <div class="feature-img">
                      <a href="#">
                        <img src="{{ asset('img/proj/me.jpg') }}" class="responsive-img" alt="">
                      </a>
                  </div>
                  <div class="title col s12 m12">
                      <h2 class="thefont">Andreu García</h2>
                  </div>
              </div>
              <div class="col l12 m12 s12 skills sidebar-item">
                  <div class="row">
                      <div class="col m12 l3 s12 icon">
                          <i class="fa fa-2x fa-calendar-o"></i> <!-- icon -->
                      </div>
                       <!-- Skills -->
                      <div class="col m12 l9 s12 skill-line a5">
                          <h3>Conocimientos</h3>

                          <span>PHP</span>
                          <div class="progress">
                              <div class="determinate" style="width: 100%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>HTML</span>
                          <div class="progress">
                              <div class="determinate" style="width: 100%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>CSS</span>
                          <div class="progress">
                              <div class="determinate" style="width: 95%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>Javascript</span>
                          <div class="progress">
                              <div class="determinate" style="width: 75%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>Angular</span>
                          <div class="progress">
                              <div class="determinate" style="width: 35%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>SQL</span>
                          <div class="progress">
                              <div class="determinate" style="width: 80%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>Laravel</span>
                          <div class="progress">
                              <div class="determinate" style="width: 85%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>Vue 2</span>
                          <div class="progress">
                            <div class="determinate" style="width: 40%;"><i class="fa fa-circle"></i></div>
                          </div>

                          <span>Adobe Photoshop</span>
                          <div class="progress">
                              <div class="determinate" style="width: 60%;"><i class="fa fa-circle"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </aside>

      <div class="col s12 m12 l8" id="theinfo">
          <div class="cover-latter z-depth-1">
              <div class="cover-title">
                @php
                  $hora = date('G');
                  if ($hora >= 0 && $hora <= 6) { $texto = "¡¿Que haces a estas horas despierto?!"; }
                  elseif ($hora > 6 && $hora <= 14) { $texto = "¡Buenos días!"; }
                  elseif ($hora > 14 && $hora <= 20) { $texto = "¡Buenas tardes!"; }
                  elseif ($hora > 20 && $hora <= 24) { $texto = "¡Buenas noches!"; }
                @endphp
                  <div class="pull-right hide-on-small-only">
                    <a class="btn btn-sm waves-effect waves-light" target="_blank" href="https://www.canva.com/design/DACozt8IyVs/6VfpFh09p9IEHnU8pamqEg/view?utm_content=DACozt8IyVs&utm_campaign=designshare&utm_medium=link&utm_source=sharebutton">Ver CV <em><?= date('j/m/Y') ?></em></a>
                    <br><br>
                  </div>
                  <h2>Andreu García Martínez</h2>
                  <p>
                    Full Stack Developer<br>
                    Computer engineer<br>
                    Lindy hop dancer
                  </p>
              </div>
              <h4 class="cover-title">
                {{-- Buenas! --}}
                <i class="fa fa-fw fa-quote-left" aria-hidden="true" style="font-size:1.3em"></i> <?= $texto ?>
              </h4>
              <div class="midescripcion">
                <p>Soy programador de aplicaciones web por las mañanas y profesor de Lindy Hop por la tarde, si no me encuentras frente a la pantalla, búscame en la pista de baile <i class="fa fa-smile-o"></i>.</p>
                <p>Me apasiona solucionar problemas y encontrar la manera más eficiente de hacer las cosas, necesito definir un proyecto lo mejor posible con el cliente para optimizar cada aplicación desde el principio y evitar malentendidos, ¡aunque los cambios son inevitables!</p>
                <p>Por contrapartida, para gran frustración del project manager, me cuesta no intentar solucionar cada error del código, es como si llevaras el coche al mecánico porque no funcionan las luces y además te arreglara la dirección y la correa de distribución porque estaban a punto de estropearse, aunque he trabajado en agencias y consultorías informáticas y he aprendido también a limitarme al error que nos pide el cliente cuando hay que hacerlo y el tiempo es lo más importante.</p>
                <p>Me encanta trabajar en BackEnd, crear APIs que nutran las aplicaciones, pero siempre me las he tenido que arreglar para saber hacerlo todo, así que no me sorprende encontrarme en Front, diseñando como buenamente puedo o pensando en la usabilidad del usuario para que todo vaya como la seda. Me encantaría estar en un equipo experimentado en el que podamos crecer aportando y aprendiendo juntos.</p>
              </div>
              <div class="signature">
                <img src="{{ asset('img/firma_andreu.png') }}" alt="" height="100" class="img-responsive">
              </div>
          </div>
      </div>
  </div><!-- end row -->
</div>
