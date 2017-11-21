@extends('layouts.app')

@section('title', 'Andreu García Martínez')

@section('content')

	<main>
		<section class="section section--shots section--right">
			<h2 class="section__heading">Imagine {{-- <em>is</em> --}} Everything</h2>
			<p class="section__subtitle">To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science.</p>
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
				</ul>
			</div>
		</section>

		@include('layouts.footer')

	</main>

	{{-- Modal --}}
	<div class="modal-box">
		<div class="modal-box-content">
			<section class="section">
				<div style="margin-top:150px">
					<div class="bloque_molon mobile-hide">
						<div class="pad-22 text-center op">
							<a target="_blank" class="modal-url" rel="nofollow" href="#">
								<img id="modal-img" src="#" alt="img_modal">
							</a>
						</div>
					</div>
					<div class="bloque_molon">
						<div class="pad-22">
							<div class="bloque_fade">
								<li class="fade_molon">
									<h3 id="modal-title">The titulaco</h3>
								</li>
								<li class="fade_molon">
									<div id="modal-content">
										{{-- Descripción del modal aquí --}}
									</div>
								</li>
								<li class="fade_molon">
									<hr class="modal-space">
								</li>
								<li class="fade_molon"><a class="modal-url" target="_blank" rel="nofollow" href="#">Ver página</a></li>
								<li class="fade_molon"><a id="modal-url-face" target="_blank" rel="nofollow" href="#">Facebook</a></li>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<button class="modal-close"><i class="fa fa-2x fa-compress" aria-hidden="true"></i></button>
	</div>

@endsection
