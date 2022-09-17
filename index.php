<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Aeropuerto</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<?php include('config/conexion.php'); ?>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="index is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1 id="logo"><a href="index.php">Alejandro Zapata</a></h1>
			<nav id="nav">
				<ul>
					<li class="current"><a href="index.php">Bienvenido</a></li>

					<li><a href="ingreso.php" class="button primary">Ingresar</a></li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">

			<div class="inner">

				<header>
					<h2>Aeropuerto de Cali</h2>
				</header>

			</div>

		</section>

		<!-- Main -->
		<article id="main">

			<header class="special container">
				<span class="icon solid fa-plane"></span>
				<h2><strong>Vuelos de llegada</strong></h2>
			</header>
			<center>
				<div>
					<table style="width: 80%">
						<tr>
							<td></td>
							<td><b>TIME</b></td>
							<td><b>FROM CITY</b></td>
							<td><b>FLIGHT NO</b></td>
							<td><b>REMARKS</b></td>
						</tr>
						<?php
						$sql = "SELECT * from llegadas";
						$result = mysqli_query($conexion, $sql);

						while ($mostrar = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td><?php echo $mostrar[''] ?></td>
								<td><?php echo $mostrar['time'] ?></td>
								<td><?php echo $mostrar['fromcity'] ?></td>
								<td><?php echo $mostrar['flightno'] ?></td>
								<td><?php echo $mostrar['remarks'] ?></td>
							</tr>
						<?php
						}
						?>
					</table>
				</div>
			</center>
			<center>

				<div>
					<h2><strong>Vuelos por despegar</strong></h2>

					<table style="width: 80%">
						<tr>
							<td></td>
							<td><b>TIME</b></td>
							<td><b>DESTINY</b></td>
							<td><b>FLIGHT NO</b></td>
							<td><b>GATE</b></td>
							<td><b>REMARKS</b></td>
						</tr>
						<?php
						$sql = "SELECT * from salidas";
						$result = mysqli_query($conexion, $sql);

						while ($mostrar = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td><?php echo $mostrar[''] ?></td>
								<td><?php echo $mostrar['time'] ?></td>
								<td><?php echo $mostrar['destiny'] ?></td>
								<td><?php echo $mostrar['flightno'] ?></td>
								<td><?php echo $mostrar['gate'] ?></td>
								<td><?php echo $mostrar['remarks'] ?></td>
							</tr>
						<?php
						}
						?>
					</table>

				</div>

			</center>

		</article>


		<!-- Footer -->
		<footer id="footer">

			<ul class="icons">
				<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
			</ul>

			<ul class="copyright">
				<li>&copy; Alejandro</li>

			</ul>

		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>