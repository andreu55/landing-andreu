<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Andreu</title>
		<meta name="description" content="Decorative &amp; interactive isometric &amp; 3D grids." />
		<meta name="keywords" content="isometric, grid, images, masonry, perspective" />

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="{{ asset('isometric/css/normalize.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('isometric/css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('isometric/css/component.css') }}" />


		<script src="{{ asset('isometric/js/modernizr.custom.js') }}"></script>
	</head>
	<body class="demo-2">
		<main>
			<section class="section section--shots section--right">
				<h2 class="section__heading">Imagine {{-- <em>is</em> --}} Everything</h2>
				<p class="section__subtitle">To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science.</p>
				<div class="isolayer isolayer--deco4">
					<ul class="grid">
						@foreach ($isometric as $key => $i)
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
			<section class="interval">
				<p class="interval__text">Isometric projection is a method for visually representing three-dimensional objects in two dimensions in technical and engineering drawings. <em>&mdash; <a href="https://en.wikipedia.org/wiki/Isometric_projection">Wikipedia</a></em></p>
			</section>
		</main>

		{{-- Modal --}}
		<div class="modal-box">
			<div class="modal-box-content">

				<ul>
					<li><a href="#">One</a></li>
					<li><a href="#">Two</a></li>
					<li><a href="#">Three</a></li>
					<li><a href="#">Four</a></li>
					<li><a href="#">Five</a></li>
					<li>Isometric projection is a method for visually representing three-dimensional objects in two dimensions in technical and engineering drawings. <em>&mdash; <a href="https://en.wikipedia.org/wiki/Isometric_projection">Wikipedia</a></em></li>
				</ul>
			</div>
			<button class="modal-close"><span class="visuallyhidden">Close modal box</span></button>
		</div>


		<script src="{{ asset('isometric/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('isometric/js/masonry.pkgd.min.js') }}"></script>
		<script src="{{ asset('isometric/js/dynamics.min.js') }}"></script>
		<script src="{{ asset('isometric/js/classie.js') }}"></script>
		<script src="{{ asset('isometric/js/main.js') }}"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

		<script>

		(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			// new IsoGrid(document.querySelector('.isolayer--deco1'), {
			// 	transform : 'translateX(33vw) translateY(-340px) rotateX(45deg) rotateZ(45deg)',
			// 	stackItemsAnimation : {
			// 		properties : function(pos) {
			// 			return {
			// 				translateZ: (pos+1) * 30,
			// 				rotateZ: getRandomInt(-4, 4)
			// 			};
			// 		},
			// 		options : function(pos, itemstotal) {
			// 			return {
			// 				type: dynamics.bezier,
			// 				duration: 500,
			// 				points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
			// 				delay: (itemstotal-pos-1)*40
			// 			};
			// 		}
			// 	}
			// });
			new IsoGrid(document.querySelector('.isolayer--deco4'), {
				perspective: 3000,
				transform : 'translate3d(-200px,-200px,0) scale3d(0.8,0.8,1) rotateY(45deg) rotateZ(-10deg)',
				stackItemsAnimation : {
					properties : function(pos) {
						return {
							rotateX: (pos+1) * -2,
							translateZ: (pos+1) * 15,
							rotateZ: getRandomInt(-5, 5)
						};
					},
					options : function(pos, itemstotal) {
						return {
							// type: dynamics.spring,
							type: dynamics.bezier,
							duration: 450,
							points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
							delay: (itemstotal-pos-1)*30
						};
					}
				},
				onGridLoaded : function() {
					classie.add(document.body, 'grid-loaded');
				}
			});
		})();


		var $trigger = $('.modal-open');
		var $close = $('.modal-close');
		var $modal = $('.modal-box');

		$(window).on('resize', function() {
		    var top = $trigger.offset().top + $trigger.outerHeight();
		    var left = $trigger.offset().left;
		    var width = $trigger.outerWidth();
		    $trigger.attr({
		        'data-top': top,
		        'data-left': left,
		        'data-width': width
		    });
		    $modal.css({
		        top: top,
		        left: left
		    });
		}).trigger('resize');

		$trigger.on('click', function() {
		    $modal.css({
		        top: 0,
		        left: 0,
		        width: '100%',
		        height: '100%'
		    }).addClass('is-open');
		});

		$close.on('click', function() {
		    var top = $trigger.offset().top + $trigger.outerHeight();
		    var left = $trigger.offset().left;
		    $modal.css({
		        top: top,
		        left: left,
		        width: 0,
		        height: '2px'
		    }).removeClass('is-open');
		});

		</script>
	</body>
</html>
