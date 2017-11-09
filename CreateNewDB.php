<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 08/11/2017
 * Time: 12:15
 */

// primero sólo habrá un campo para añadir el título de la base de datos, un campo para poner el título del elemento y otro para poner el contenido, un botón para añadir al momento más campos además de un botón para crear elemento. Podría poner ya el tipo de elemento.

        /*
         * esto llamará a un código que creará el html necesario para poner un título y el tipo de elemento.
         */
// Se pedirá nombre para este campo y a continuación el contenido para este campo.
// este botón permanecerá abajo.
// al lado aparecerá botone para eliminar contenido o editarlo.
// a partir de que haya un elemento creado, no se verá, pero sí aparecerá algo, un botón o previsualización, en el que se pueda clicar y que se vea el contenido.
//

include_once "ConfigDB.php";
include_once "ConnectDB.php";
include_once 'helpers.php';

$nameUser=htmlspecialchars(trim($_POST['userName']));
$passUser= htmlspecialchars(trim($_POST['password']));

$sql= "SELECT * FROM USER ";
$result = $pdo->prepare($sql);


// dameDato($nameUser);
// A MEDIDA QUE SE CREEN NUEVOS CAMPOS, DEBERÍA HACER UN SELECT PARA OBTENERLOS. PARA ELLO COMPARAR LAS VARIABLE QUE TENGO Y SI FALTA O SOBRA ALGUNA, HACER LO CORRESPONDIENTE

/*
 * ESTO DEBERÁ DE IR EN ALGÚN MOMENTO ABAJO
 * $sql = "INSERT INTO Serialnumbers (appName, version, serialNumber, purchased, validUntil, price) VALUES (:appName, :version, :serialNumber, :purchased, :validUntil, :price)";
 *
 */
?>

<html lang="es">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>CREACIÓN</title>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Crear elementos</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php.php">Creación de elementos</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

</div><!-- /.container -->

<div class="container">

    <h2>Añadir elementos</h2>
    <form method="post">

        <div class="form-group">
            <label for="dataBaseName">Introduzca un nombre para su nueva base de datos</label>
            <input type="text" class="form-control" id="dataBaseName" name="dataBaseName">
        </div>

        <div class="form-group">
            <label for="fieldName">Elija un nombre para este campo</label>
            <input type="text" class="form-control" id="fieldName" name="fieldName">
        </div>

        <div class="form-group">
            <label for="fieldName">Escriba el contenido</label>
            <input type="text" class="form-control" id="fieldName" name="fieldName" placeholder="Escriba aquí el contenido">
        </div>

        <div>
            <input class="btn btn-info" type="submit" value="Añadir Elemento">
        </div>

        <div>
            <input class="btn btn-info" type="submit" value="Crear Base de datos">
        </div>


    </form>
</div>

</body>
</html>
