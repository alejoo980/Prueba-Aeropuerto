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
            <h1 id="logo"><a href="index.php">Alejandro Zapata</a></h1>
            <nav id="nav">
                <ul>
                    <li class="current">Bienvenido</a></li>

                    <li><a href="index.php" class="button primary">Cerrar cuenta</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">

            <div class="inner">

                <header>
                    <h2>registro de tiempos</h2>
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
                    <form action="insertar.php" method="POST">
                        <div class="fields">
                            <div class="field half">
                                <label for="my-input"><strong>Tiempo: </strong></label>
                                <input id="time" type="text" name="time" style="width: 50%" required>
                                <br>
                            </div>

                            <div class="field half">
                                <label for="my-input"><strong>From city: </strong></label>
                                <input id="fromcity" type="text" name="fromcity" style="width: 50%" required>
                                <br>
                            </div>
                            <div class="field half">
                                <label for="my-input"><strong>Numero de vuelo: </strong></label>
                                <input id="flightno" type="text" name="flightno" style="width: 50%" required>
                                <br>
                            </div>

                            <div class="field half">
                                <label for="my-input"><strong>Novedad: </strong></label>
                                <input id="remarks" type="text" name="remarks" style="width: 50%" required>
                                <br>
                            </div>

                            <ul class="actions">
                                <li><input type="submit" name="guardarllegadas" value="Guardar" class="button primary" /></li>
                            </ul>
                        </div>
                    </form>
                </div>

                <header class="special container">
                    <span class="icon solid fa-plane"></span>
                    <h2><strong>Vuelos en despegue</strong></h2>
                </header>
                <div>
                    <form action="insertar.php" method="POST">
                        <div class="field half">
                            <label for="my-input"><strong>Tiempo: </strong></label>
                            <input id="time" type="text" name="time" style="width: 50%" required>
                            <br>
                        </div>

                        <div class="field half">
                            <label for="my-input"><strong>Destino: </strong></label>
                            <input id="destiny" type="text" name="destiny" style="width: 50%" required>
                            <br>
                        </div>
                        <div class="field half">
                            <label for="my-input"><strong>Numero de vuelo: </strong></label>
                            <input id="flightno" type="text" name="flightno" style="width: 50%" required>
                            <br>
                        </div>
                        <div class="field half">
                            <label for="my-input"><strong>Puerta: </strong></label>
                            <input id="gate" type="text" name="gate" style="width: 50%" required>
                            <br>
                        </div>
                        <div class="field half">
                            <label for="my-input"><strong>Novedad: </strong></label>
                            <input id="remarks" type="text" name="remarks" style="width: 50%" required>
                            <br>
                        </div>

                        <ul class="actions">
                            <li><input type="submit" name="guardarDespegue" value="Guardar" class="button primary" /></li>
                        </ul>
                    </form>
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