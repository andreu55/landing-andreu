<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Andreu García Martínez')</title>
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />

	{{-- <script src="{{ asset('js/modernizr.custom.js') }}"></script> --}}
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

	</script>

	<script src="{{ asset('js/ads.js') }}"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		// if( window.canRunAds === undefined ){
		// 	// adblocker detected, show fallback
		// 	$('.footer-company-name').html("<h2>Adblock Detected</h2><p>Acho pijo</p>");
		// } else {
			(adsbygoogle = window.adsbygoogle || []).push({});
		// }
	</script>

</body>
</html>
