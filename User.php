<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 08/11/2017
 * Time: 18:03
 */


// en esta página es donde se debe llevar a la página de crear, leer, editar, borrar.
// tras haber comprobado que nombre de usuario y contra existe
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
        <a class="navbar-brand" href="#">Página de inicio</a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="Registry.php">Registrarse</a></li>
        </ul>
    </div><!--/.nav-collapse -->

    </div>
</nav>

</div><!-- /.container -->

<div class="container">

    <h2>Inicio de sesión</h2>
    <form method="post">


        <div>
            <input class="btn btn-info" type="submit" value="Enviar">
            <a href="CreateNewDB.php"><button class="btn btn-info" type="button">2.1 Edición</button></a>
        </div>


    </form>
</div>

</body>
</html>
