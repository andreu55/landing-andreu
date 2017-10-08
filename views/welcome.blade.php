<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Andreu García Martínez</title>
	<meta name="description" content="Decorative &amp; interactive isometric &amp; 3D grids." />
	<meta name="keywords" content="isometric, grid, images, masonry, perspective" />

	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107688108-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107688108-1');
	</script>

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" integrity="sha256-HxaKz5E/eBbvhGMNwhWRPrAR9i/lG1JeT4mD6hCQ7s4=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('isometric/css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('isometric/css/component.css') }}" />

	{{-- <script src="{{ asset('isometric/js/modernizr.custom.js') }}"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=" crossorigin="anonymous"></script>
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
		{{-- <section class="interval">
			<p class="interval__text">IsometricIsometric projection is a method for visually representing three-dimensional objects in two dimensions in technical and engineering drawings. <em>&mdash; </em></p>
		</section> --}}
		<footer class="footer-distributed">
			<div class="footer-left">
				<h3>Andreu García Martínez <small><span><small>&copy; {{ date('Y') }}</small></span></small></h3>
				{{-- <p class="footer-links">
					<a href="#">Home</a>·
					<a href="#">Blog</a>·
					<a href="#">Pricing</a>·
					<a href="#">About</a>·
					<a href="#">Faq</a>·
					<a href="#">Contact</a>
				</p> --}}
				<div class="footer-company-name">
					<!-- andreugarcia -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-4156199932712390"
					     data-ad-slot="5578929975"
					     data-ad-format="auto"></ins>
				</div>
				<div class="footer-icons">
					<a target="_blank" rel="nofollow" href="https://www.facebook.com/anduwet"><i class="fa fa-facebook"></i></a>
					<a target="_blank" rel="nofollow" href="https://twitter.com/andreu55"><i class="fa fa-twitter"></i></a>
					<a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/andreu-garcia-martinez-69a95061/"><i class="fa fa-linkedin"></i></a>
					<a target="_blank" rel="nofollow" href="https://github.com/andreu55"><i class="fa fa-github"></i></a>
				</div>
			</div>

			<div class="footer-right">
				<p>Contact me</p>
				<div class="form">
					<input type="text" id="email" placeholder="Email" />
					<textarea id="message" placeholder="Message"></textarea>
					<a id="send_button">Send</a>
				</div>
			</div>
		</footer>

	</main>

	{{-- Modal --}}
	<div class="modal-box">
		<div class="modal-box-content">
			<section class="section">
				<div style="margin-top:150px">
					<div style="width:50%; float:left">
						<div style="padding:0 22px; text-align:center">
							<img id="modal-img" src="{{ asset('isometric/img/Dribbble/1.png') }}" alt="" style="width:100%;opacity:1">
						</div>
					</div>
					<div style="width:50%; float:left">
						<div style="padding:0 22px">
							<h3 id="modal-title">Titulaco</h3>
							<div id="modal-content">
								Hola! Isometric projection is a method for visually representing three-dimensional objects in two dimensions in technical and engineering drawings. <em>&mdash; <a href="https://en.wikipedia.org/wiki/Isometric_projection">Wikipedia</a></em>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
		<button class="modal-close"><i class="fa fa-3x fa-compress" aria-hidden="true"></i></button>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.3/imagesloaded.pkgd.min.js" integrity="sha256-97PclCl81H1LIZVHfv8azWgapzhRWQBhtYsy/AWkoAc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js" integrity="sha256-YFADoQJIYFj+isdXssMGUrmsVNbVDfN5m8jPgVN+9m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dynamics.js/1.1.5/dynamics.min.js" integrity="sha256-KJT8Gf8olUvzOOOUg4gWhGDrAMEeligP2FzCI2WsBY0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js" integrity="sha256-6O5DljdGA6AiaEVC/Zn8pNLNbQGparYTI9091fGX64k=" crossorigin="anonymous"></script>
	<script src="{{ asset('isometric/js/main.js') }}"></script>

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

	</script>

	{{-- Necesitamos jquery para lo que viene! --}}
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>


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

		$('#modal-title').html($(this).data('title'));
		$('#modal-content').html($(this).data('content'));
		$('#modal-img').attr('src', $(this).attr('src'));

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


	$("#send_button").click(function(){

		$("#send_button").html('<i class="fa fa-refresh fa-spin fa-fw"></i>');

		$.post("send.php",
		{
			email: $('#email').val(),
			message: $('#message').val()
		},
		function(data, status){
			if(status == 'success') {

				console.log(data);

				$("#send_button").html('Enviado!');
			}
		});
	});

	</script>

	<script src="isometric/js/ads.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		if( window.canRunAds === undefined ){
			// adblocker detected, show fallback
			$('.footer-company-name').html("<h2>Adblock Detected</h2><p>Acho, que tengo que comel</p>");
		} else {
			(adsbygoogle = window.adsbygoogle || []).push({});
		}
	</script>

</body>
</html>
