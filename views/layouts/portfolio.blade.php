<h2 class="thefont section__heading">El <em>infinito</em> es tuyo</h2>
<p class="thefont section__subtitle">
  Si puedes imaginarlo, puedes hacerlo.<br>
  ¿Tienes un proyecto en mente? Hablemos.
  {{-- <span onclick="$.fn.fullpage.moveTo('contacto');">Hablemos</span> --}}
</p>
<div class="isolayer isolayer--deco4">
  <ul class="grid">

    @for ($i=0; $i < $total; $i++)

      @php
        // Recorremos el array randomizado y sacamos el resto del total real para elegir una posicion del portfolio
        $p = $rand[$i] % $total_real;
      @endphp

      <li class="grid__item">
        <a href="#" class="grid__link">
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
          <img
            data-title="{{ $portfolio[$p]['title'] }}"
            data-content="{{ $portfolio[$p]['content'] }}"
            {{-- data-atype="{{ $portfolio[$p]['atype'] }}" --}}
            data-socialurl="{{ $portfolio[$p]['social_url'] }}"
            class="modal-open grid__img layer"
            src="{{ asset($portfolio[$p]['img']) }}"
            alt="{{ $portfolio[$p]['alt'] }}" />
        </a>
      </li>

    @endfor

    {{-- Vamos a mostrar los 3 primeros projectos en el final tambien pero de manera inversa --}}
    @for ($i=2; $i >= 0; $i--)

      @php
        // Recorremos el array randomizado y sacamos el resto del total real para elegir una posicion del portfolio
        $p = $rand[$i] % $total_real;
      @endphp

      <li class="grid__item">
        <a href="#" class="grid__link">
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
          <img
            data-title="{{ $portfolio[$p]['title'] }}"
            data-content="{{ $portfolio[$p]['content'] }}"
            {{-- data-atype="{{ $portfolio[$p]['atype'] }}" --}}
            data-socialurl="{{ $portfolio[$p]['social_url'] }}"
            class="modal-open grid__img layer"
            src="{{ asset($portfolio[$p]['img']) }}"
            alt="{{ $portfolio[$p]['alt'] }}" />
        </a>
      </li>

    @endfor
  </ul>
</div>
