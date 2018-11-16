<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Andreu García | Full Stack Developer')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Si puedes imaginarlo, puedes hacerlo. ¿Tienes un proyecto en mente? Hablemos." />
	<meta name="keywords" content="developer, php, laravel, autónomo, freelance" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107688108-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-107688108-1');
	</script>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" integrity="sha256-HxaKz5E/eBbvhGMNwhWRPrAR9i/lG1JeT4mD6hCQ7s4=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> --}}
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.min.css" integrity="sha256-MWBJX/7o3UIX5sMN/izdthod08WoIcWN0HOP7/X8+48=" crossorigin="anonymous" /> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=" crossorigin="anonymous"></script>
</head>
<body class="demo-2">

  {{-- @include('layouts.header') --}}

  @yield('content')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.3/imagesloaded.pkgd.min.js" integrity="sha256-97PclCl81H1LIZVHfv8azWgapzhRWQBhtYsy/AWkoAc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js" integrity="sha256-YFADoQJIYFj+isdXssMGUrmsVNbVDfN5m8jPgVN+9m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dynamics.js/1.1.5/dynamics.min.js" integrity="sha256-KJT8Gf8olUvzOOOUg4gWhGDrAMEeligP2FzCI2WsBY0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js" integrity="sha256-6O5DljdGA6AiaEVC/Zn8pNLNbQGparYTI9091fGX64k=" crossorigin="anonymous"></script>
	<script src="{{ asset('js/main.js') }}"></script>

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
	var $close = $('.mclose');
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
		$('.modal-url').attr('href', $(this).data('socialurl'));

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

	// Si pulsan escape, se cierra el modal
	$(document).keyup(function(e) {
  	if (e.keyCode === 27) $close.trigger('click');
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

	var colors = new Array(
		[67, 123, 154], // Azul molon
		[205, 226, 237], // Azul claro
		[203, 229, 236], // Azul verdoso clarito
		// [53, 190, 159], // Azul verdoso molon
		// [209, 215, 239], // Morado claro
		[117, 217, 165], // Amarillito
		);

		var step = 0;
		//color table indices for:
		// current color left
		// next color left
		// current color right
		// next color right
		var colorIndices = [0,1,2,3];

		//transition speed
		var gradientSpeed = 0.002;

		function updateGradient() {

			if ( $===undefined ) return;

			var c0_0 = colors[colorIndices[0]];
			var c0_1 = colors[colorIndices[1]];
			var c1_0 = colors[colorIndices[2]];
			var c1_1 = colors[colorIndices[3]];

			var istep = 1 - step;
			var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
			var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
			var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
			var color1 = "rgb("+r1+","+g1+","+b1+")";

			var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
			var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
			var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
			var color2 = "rgb("+r2+","+g2+","+b2+")";

			$('#gradient').css({ background: "linear-gradient(20deg, "+color1+", "+color2+")" });

			step += gradientSpeed;
			if ( step >= 1 )
			{
				step %= 1;
				colorIndices[0] = colorIndices[1];
				colorIndices[2] = colorIndices[3];

				//pick two new target color indices
				//do not pick the same as the current one
				colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
				colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
			}
		}

		setInterval(updateGradient,10);

	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.min.js" integrity="sha256-SwWHEBZICAfuD82HWp9i1VmxX0dXjllMm6cNKvucHAY=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors:['portfolio', 'info', 'contacto'],
				scrollingSpeed: 800,
			});
		});
	</script>

	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> --}}
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>

		var _SET_INTERVAL_HANDLE;
		var _ERROR_IN_PAGE = 1;
		var _IMAGE_COUNTER = 0;
		var _ERROR_FAVICON_IMAGES = ['andreu1.png', 'andreu2.png', 'andreu3.png', 'andreu4.png', 'andreu5.png'];
		var _NORMAL_FAVICON_IMAGE = '{{ asset('favicon/favicon.ico') }}';

		document.addEventListener('visibilitychange', function() {
			if (_ERROR_IN_PAGE == 1) {
				if (document.hidden) { ShowErrorFavicon(); }
				else { ShowNormalFavicon(); }
			}
		});

		function ShowErrorFavicon() {
			_SET_INTERVAL_HANDLE = setInterval(function() {
			    $("link[rel='icon']").remove();
			    $("link[rel='shortcut icon']").remove();
			    $("head").append('<link rel="icon" href="{{ asset('favicon') }}/' + _ERROR_FAVICON_IMAGES[_IMAGE_COUNTER] + '" type="image/x-icon">');

			    if(_IMAGE_COUNTER == _ERROR_FAVICON_IMAGES.length -1)
			        _IMAGE_COUNTER = 0;
			    else
			        _IMAGE_COUNTER++;
			}, 180);
		}

		function ShowNormalFavicon() {
			clearInterval(_SET_INTERVAL_HANDLE);
			$("head").append('<link rel="shortcut icon" type="image/x-icon" href="' + _NORMAL_FAVICON_IMAGE + '">');
			$("head").append('<link rel="icon" type="image/x-icon" href="' + _NORMAL_FAVICON_IMAGE + '">');
		}

	</script>

</body>
</html>
