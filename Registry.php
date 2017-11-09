<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 08/11/2017
 * Time: 11:34
 */

include_once "ConfigDB.php";
include_once "ConnectDB.php";

?>

<?php

?>
<html lang="es">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>INICIO</title>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Página de registro</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio de sesión</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

</div><!-- /.container -->


<div class="container">
    <h2>Rellene el formulario para registrarse</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Introduzca su nombre</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="surName">Introduzca sus apellidos</label>
            <input type="text" class="form-control" id="surName" name="surName">
        </div>

        <div class="form-group">
            <label for="email">Introduzca su email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Introduzca su contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="rePassword">Vuelva a introducir su contraseña</label>
            <input type="password" class="form-control" id="rePassword" name="rePassword">
        </div>

        <div>
            <input class="btn btn-info" type="submit" value="Enviar">
        </div>

    </form>
</div>

</body>
</html>

