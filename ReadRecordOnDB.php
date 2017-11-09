<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 09/11/2017
 * Time: 12:26
 */

include_once "ConfigDB.php";
include_once "ConnectDB.php";
include_once 'helpers.php';

// $query =
$queryResult = $pdo->query("SELECT * from  Serialnumbers");
//$sql = "SELECT * from  Serialnumbers";
//$result = $pdo->prepare($sql);

?>

<html lang="es">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>LEER DATOS GUARDADOS</title>

</head>
<body>

<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Leer elementos</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"></a>Leer los elementos guardados</li>
                </ul>
            </div><!--/.nav-collapse -->

        </div>
    </nav>

</div><!-- /.container -->

<div class="container">
    <h2>Leer elementos</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre de la aplicaión </th>
            <th>Versión</th>
            <th>Número de serie</th>
            <th>Fecha de compra</th>
            <th>Licencia válida hasta</th>
            <th>Precio</th>
        </tr>
        </thead>

        <tbody>
        <?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
            <tr>
                <td><?=$row['appName']?></td>
                <td><?=$row['version']?></td>
                <td><?=$row['serialNumber']?></td>
                <td><?=$row['validUntil']?></td>
                <td><?=$row['price']?></td>
                <td><a href="DeleteRecordOnDB.php?id=<?=$row['id']?>" class="borrar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr>
        <?php endwhile; ?>

        </tbody>


    </table>
</div><!-- /.container -->
</body>
</html>
