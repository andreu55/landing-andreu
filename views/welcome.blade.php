@extends('layouts.app')

@section('title', 'Andreu García Martínez')

@section('content')

	<main id="fullpage">
		<div data-anchor="portfolio" id="gradient" class="section section--shots section--right">
			<h2 class="thefont section__heading">El <em>infinito</em> es tuyo</h2>
			<p class="thefont section__subtitle">
				Si puedes imaginarlo, puedes hacerlo.<br>
				¿Tienes un proyecto en mente? Hablemos.
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
				</ul>
			</div>
		</div>

		{{-- <div data-anchor="info" class="section">
			@include('layouts.footer')
		</div> --}}

		<div data-anchor="info" class="section section-info">
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
	                              <h3>Professional Skills</h3>

	                              <span>Adobe Photoshop</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 60%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>HTML 5</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 95%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>CSS 3</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 90%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>Javascript</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 75%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>PHP 7</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 96%;"><i class="fa fa-circle"></i></div>
	                              </div>

																<span>Angular 5</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 35%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>Vue 2</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 40%;"><i class="fa fa-circle"></i></div>
	                              </div>

	                              <span>SQL</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 80%;"><i class="fa fa-circle"></i></div>
	                              </div>

																<span>Laravel 5.5</span>
	                              <div class="progress">
	                                  <div class="determinate" style="width: 85%;"><i class="fa fa-circle"></i></div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </aside>

	          <section class="col s12 m12 l8 section" id="theinfo">
	              <div class="cover-latter z-depth-1">
	                  <div class="cover-title">
											@php
												$hora = date('G');
												if ($hora >= 0 && $hora <= 6) { $texto = "¡¿Que haces a estas horas despierto?!"; }
												elseif ($hora > 6 && $hora <= 13) { $texto = "¡Buenos días!"; }
												elseif ($hora > 13 && $hora <= 15) { $texto = "¡Que aproveche!"; }
												elseif ($hora > 15 && $hora <= 20) { $texto = "¡Buenas tardes!"; }
												elseif ($hora > 20 && $hora <= 24) { $texto = "¡Buenas noches!"; }
											@endphp
												<em class="pull-right"><?= date('j/m/Y') ?></em>
	                      <h2>Andreu García Martínez</h2>
	                      <p>
													Front &amp; BackEnd Developer<br>
													Computer engineer<br>
													Lindy hop dancer
	                      </p>
	                  </div>
	                  <h4 class="cover-title">
											{{-- Buenas! --}}
											<i class="fa fa-fw fa-quote-left" aria-hidden="true" style="font-size:1.3em"></i> <?= $texto ?>
										</h4>
	                  <p>Soy programador de aplicaciones web front &amp; backEnd y project manager por las mañanas. Profesor de Lindy Hop por la tarde.</p>
										<p>Si no me encuentras frente a la pantalla, búscame en la pista de baile.</p>
										<p>Me apasiona solucionar problemas y encontrar la manera más eficiente de hacer las cosas.</p>
										<p>También me gusta definir un proyecto lo mejor posible con el cliente para optimizar la aplicación desde el principio y evitar malentendidos, ¡aunque los cambios son inevitables!</p>
	                  <p>Por contrapartida, para gran frustración de mi project manager, no dejo de intentar solucionar cada error del código, es como si llevaras el coche al mecánico porque no funcionan las luces y además te arreglara el asiento, la dirección y la correa de distribución porque estaban a punto de estropearse.</p>
	                  <p>Trabajo principalmente con Laravel, Angular, (...).</p>
	                  <div class="signature">
	                  	<img src="{{ asset('img/firma_andreu.png') }}" alt="" height="100" class="img-responsive">
	                  </div>
	              </div>
	          </section>
	      </div><!-- end row -->
	  	</div>
		</div>

		{{-- data-anchor="contacto" --}}
		<div class="section" style="background:#FFF">

			{{-- @include('layouts.footer') --}}

			<div class="container">
				<div class="row">
			    <form class="col s12">
						<h1>Contacto</h1>
			      <div class="row">
							<div class="input-field col s6">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s6">
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="message" type="text">
			          <label for="message">Mensaje</label>
			        </div>
			      </div>
			    </form>
					<div class="col s6">
						<div class="footer-distributed">
					    <div class="footer-icons">
					      <a target="_blank" rel="nofollow" href="https://www.facebook.com/anduwet"><i class="fa fa-facebook"></i></a>
					      <a target="_blank" rel="nofollow" href="https://twitter.com/andreu55"><i class="fa fa-twitter"></i></a>
					      <a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/andreu-garcia-martinez-69a95061/"><i class="fa fa-linkedin"></i></a>
					      <a target="_blank" rel="nofollow" href="https://github.com/andreu55"><i class="fa fa-github"></i></a>
					    </div>
					  </div>
					</div>
			  </div>
			</div>

		</div>


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
