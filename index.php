<!DOCTYPE HTML>
<html>
	<head>
		<title>Paradigm Shift by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
		<!-- <script src="assets/js/background.js"></script> -->


		<script type="text/javascript">


			// Refresca cada 5 segundos la hora
			setInterval(
				function() {
					$("#moment").html(moment().format('H:mm'))
				}, 5000
			);

			// Enviador de correo
			$("#send_button").click(function() {

				$("#send_button").html('<i class="fa fa-refresh fa-spin fa-fw"></i>');

				$.post("send.php", {
					name: $('#name').val(),
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

	</body>
</html>
