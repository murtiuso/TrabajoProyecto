<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 08/11/2017
 * Time: 11:35
 */

try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
    //echo("conexión");
}catch(PDOException $e){
    die("No se pudo conectar a la base de datos");
    echo $e->getMessage();
}