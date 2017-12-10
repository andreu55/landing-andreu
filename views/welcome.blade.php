@extends('layouts.app')

@section('title', 'Andreu García Martínez')

@section('content')

	<main id="fullpage">
		<div data-anchor="portfolio" id="gradient" class="section section--shots section--right">
			@include('layouts.portfolio')
		</div>

		<div data-anchor="info" class="section section-info">
			@include('layouts.info')
		</div>

		<div data-anchor="contacto" class="section section-contacto">
			@include('layouts.contacto')
		</div>
	</main>

	{{-- Modal --}}
	<div class="modal-box">
		<div class="modal-box-content">
			<div class="themodal" style="padding:7vmax">
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
			</div>
		</div>
		<button class="modal-close"><i class="fa fa-2x fa-compress" aria-hidden="true"></i></button>
	</div>

@endsection
