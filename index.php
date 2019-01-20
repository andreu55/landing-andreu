<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Andreu García | Full Stack Developer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="Si puedes imaginarlo, puedes hacerlo. ¿Tienes un proyecto en mente? Hablemos." />
		<meta name="keywords" content="developer, php, laravel, autónomo, freelance" />

		<link rel="shortcut icon" type="image/x-icon" href="assets/favicon/favicon.ico">
		<link rel="icon" type="image/x-icon" href="assets/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">

		<link rel="stylesheet" href="assets/css/main.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107688108-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-107688108-1');
		</script>

	</head>

	<body class="is-preload">

		<div id="realback">
			<!-- Wrapper -->
			<div id="wrapper">

				<?php include 'section-portada.php' ?>
				<?php include 'section-first.php' ?>
				<?php include 'section-conocimientos.php' ?>
				<?php include 'section-portfolio.php' ?>
				<?php include 'section-oldweb.php' ?>
				<?php // include 'section-elements.php' ?>
				<?php include 'section-contact.php' ?>

				<!-- Copyright -->
				<div class="copyright"><?= date('Y') ?> &copy; andreugarcia.com. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

			</div>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/moment.min.js"></script>

		<!-- El fondo que cambia de color -->
		<script src="assets/js/background.js"></script>

		<script type="text/javascript">

			// Refresca cada 5 segundos la hora
			setInterval(
				function() {
					$("#moment_hora").html(moment().format('H:mm'));

					var hora = moment().format('HH');
					var texto = '';

					if (hora >= 0 && hora <= 6) { texto = "¿Trasnochando?"; }
					else if (hora > 6 && hora <= 14) { texto = "¡Buenos días!"; }
					else if (hora > 14 && hora <= 20) { texto = "¡Buenas tardes!"; }
					else if (hora > 20 && hora <= 24) { texto = "¡Buenas noches!"; }

					$("#moment_frase").html(texto);

				}, 5000
			);


			// Enviador de correo
			$("#send_button").click(function() {

				var name = $('#name').val();
				var email = $('#email').val();
				var message = $('#message').val();

				if (email && message) {

					$("#send_button").html('<i class="fa fa-refresh fa-spin fa-fw"></i>');

					$.post("send.php", {
						name: name,
						email: email,
						message: message
					},
					function(data, status) {
						if(status == 'success') {
							console.log(data);
							$("#send_button").html('Enviado!');
						}
					});

				} else {

					$("#send_button").html('¡Faltan datos!');

					setTimeout(
						function() {
							$("#send_button").hide();
							$("#send_button").html('Enviar');
							$("#send_button").fadeIn();
						}, 3000
					);

				}

			});

		</script>

	</body>
</html>
