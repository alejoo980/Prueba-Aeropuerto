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
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="index is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1 id="logo"><a href="index.php"><b>Inicio</b></a></h1>
            <nav id="nav">
                <ul>
                    <li class="current"><b>INGRESA TUS DATOS</b></li>


                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">

            <div class="inner">

                <div class="row">
                    <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
                    <div class="col-10 col-sm-10 col-md-4 col-lg-4">
                        <br><br>
                        <form id="formulario" method="post">
                            <h1 class="text-center"><strong>Login</strong></h1>
                            <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento" required="true" maxlength="10" minlength="3">
                            <br>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true" maxlength="10" minlength="3">
                            <br>
                            <br>
                            <button type="submit">Ingresar</button>
                            <br><br>
                            <div id="alerta"></div>
                        </form>
                    </div>
                    <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
                </div>

            </div>

        </section>

        <!-- Main -->

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
    <script src="assets/js/app.js"></script>
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