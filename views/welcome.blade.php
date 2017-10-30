@extends('layouts.app')

@section('title', 'Andreu García Martínez')

@section('content')

	<main>
		<section class="section section--shots section--right">
			<h2 class="section__heading">Imagine {{-- <em>is</em> --}} Everything</h2>
			<p class="section__subtitle">To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science.</p>
			<div class="isolayer isolayer--deco4">
				<ul class="grid">
					@foreach ($portfolio as $key => $i)
						<li class="grid__item">
							<a href="{{ $i['url'] }}" class="grid__link">
								<div class="layer"></div>
								<div class="layer"></div>
								<div class="layer"></div>
								<img data-title="{{ $i['title'] }}" data-content="{{ $i['content'] }}" data-atype="{{ $i['atype'] }}" class="modal-open grid__img layer" src="{{ asset($i['img']) }}" alt="{{ $i['alt'] }}" />
							</a>
						</li>
					@endforeach
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
					<div style="width:50%; float:left">
						<div style="padding:0 22px; text-align:center">
							<img id="modal-img" src="#" alt="img_modal" style="width:100%;opacity:1">
						</div>
					</div>
					<div style="width:50%; float:left">
						<div style="padding:0 22px">
							<h3 id="modal-title">Titulaco modal</h3>
							<div id="modal-content">
								{{-- Descripción del modal aquí --}}
							</div>
							<ul>
								<li><a href="#">One</a></li>
								<li><a href="#">Two</a></li>
								<li><a href="#">Three</a></li>
								<li><a href="#">Four</a></li>
								<li><a href="#">Five</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<button class="modal-close"><i class="fa fa-2x fa-compress" aria-hidden="true"></i></button>
	</div>

@endsection
