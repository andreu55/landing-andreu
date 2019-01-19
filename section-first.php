<section id="first">
  <header>
    <?php
    $hora = date('G');
    if ($hora >= 0 && $hora <= 6) { $texto = "¡¿Que haces a estas horas despierto?!"; }
    elseif ($hora > 6 && $hora <= 14) { $texto = "¡Buenos días!"; }
    elseif ($hora > 14 && $hora <= 20) { $texto = "¡Buenas tardes!"; }
    elseif ($hora > 20 && $hora <= 24) { $texto = "¡Buenas noches!"; }
    ?>
    <h2>
      <?= $texto ?><br>
      <small>
        Son las <span id="moment"><?= date('H:i') ?></span>
      </small>
    </h2>
    <p>
      Full Stack Developer<br>
      Proyect manager<br>
      Computer engineer<br>
      Lindy hop dancer
    </p>
  </header>
  <div class="content">
    <p>Programador de aplicaciones web por las mañanas, profesor de Lindy Hop por las tardes, si no me encuentras frente a la pantalla, ¡búscame en la pista de baile!</p>
    <p>Me apasiona solucionar problemas y encontrar la manera más eficiente de hacer las cosas, me gusta definir un proyecto lo mejor posible para que cada aplicación sea genial desde el principio y así evitar malentendidos, ¡aunque los cambios son inevitables!</p>
    <p>Por contrapartida, para gran frustración del project manager, me cuesta no intentar solucionar cada error del código, es como si llevaras el coche al mecánico porque no funcionan las luces y además te arreglara la dirección y la correa de distribución porque estaban a punto de estropearse, aunque he trabajado en agencias y consultorías informáticas y he aprendido también a limitarme al error que nos pide el cliente cuando hay que hacerlo y el tiempo es lo más importante.</p>
    <p>Me encanta trabajar en BackEnd, crear APIs que nutran las aplicaciones, pero siempre me las he tenido que arreglar para saber hacerlo todo, así que no me sorprende encontrarme en Front, diseñando como buenamente puedo o pensando en la usabilidad del usuario para que todo vaya como la seda. Me encantaría estar en un equipo experimentado en el que podamos crecer aportando y aprendiendo juntos.</p>
    <p><i class="fa fa-fw fa-quote-left" aria-hidden="true" style="font-size:1.2em"></i> Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.</p>
    <img src="images/firma_andreu.png" height="100" alt="" />
  </div>
</section>
