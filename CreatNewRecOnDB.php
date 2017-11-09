<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 09/11/2017
 * Time: 12:15
 */


include_once "ConfigDB.php";
include_once "ConnectDB.php";
include_once 'helpers.php';

$errors = array();
$error = false;

$appName = "";
$version = "";
$serialNumber = "";
$purchased = "";
$validUntil = "";
$price = 0.0;

if( !empty($_POST)) {
    $appName = htmlspecialchars(trim($_POST['appName']));
    $version = htmlspecialchars(trim($_POST['version']));
    $serialNumber = htmlspecialchars(trim($_POST['serialNumber']));
    $purchased = htmlspecialchars(trim($_POST['purchased']));
    $validUntil = htmlspecialchars(trim($_POST['validUntil']));
    $price = htmlspecialchars(trim($_POST['price']));
}

if ( empty($errors) ){

    // ESTA ME FUNCIONA: INSERT INTO Serialnumbers (appName, version, serialNumber, purchased, validUntil, price) VALUES ("lalala", "3", 1234, "8-11-17", NULL , NULL)
    $sql =  "INSERT INTO Serialnumbers (appName, version, serialNumber, purchased, validUntil, price) 
VALUES (:appName, :version, :serialNumber, :purchased, :validUntil, :price)";


   //$sql = "UPDATE Serialnumbers (appName, version, serialNumber, purchased, validUntil, price) VALUES (:appName, :version, :serialNumber, :purchased, :validUntil, :price)";

    $result = $pdo->prepare($sql);

    $result->execute([
        'appName'         => $appName,
        'version'          => $version,
        'serialNumber'        => $serialNumber,
        'purchased'        => $purchased,
        'validUntil'       => $validUntil,
        'price'     => $price
    ]);

}else{
    $error = true;
}

?>

<html lang="es">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>CREAR NUEVO REGISTRO</title>


</head>

<body>
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Crear un nuevo registro en su base de datos</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Página principal</a></li>
                </ul>
            </div><!--/.nav-collapse -->

        </div>
    </nav>

</div><!-- /.container -->

<div class="container">

    <h2>Añadir elementos</h2>
    <!-- si no se pone el method = "post" no se envía la info -->
    <form method="post">

        <div class="form-group">
            <label for="appName">Introduzca el nombre de la aplicación</label>
            <input type="text" class="form-control" id="appName" name="appName">
        </div>

        <div class="form-group">
            <label for="version">Introduzca la versión</label>
            <input type="text" class="form-control" id="version" name="version">
        </div>

        <div class="form-group">
            <label for="serialNumber">Introduzca el número de serie</label>
            <input type="text" class="form-control" id="serialNumber" name="serialNumber">
        </div>

        <div class="form-group">
            <label for="purchased">Introduzca la fecha de compra</label>
            <input type="date" class="form-control" id="purchased" name="purchased">

            <!-- <input type="date" class="form-control" id="purchased" name="purchased"> -->
        </div>

        <div class="form-group">
            <label for="validUntil">Introduzca la fecha de fin de licencia</label>
            <input type="date" class="form-control" id="validUntil" name="validUntil">

            <!-- <input type="date" class="form-control" id="validUntil" name="validUntil"> -->
        </div>

        <div class="form-group">
            <label for="price">Introduzca el precio</label>                     <!-- step any para permitir decimales -->
            <input type="number" class="form-control" id="price" name="price" step="any" >
        </div>


        <div>
            <input class="btn btn-info" type="submit" value="Añadir elemento">
        </div>

        <?php dameDato($_POST); ?>
    </form>


</div>

</body>
</html>
