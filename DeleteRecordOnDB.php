<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 09/11/2017
 * Time: 13:31
 */

include_once "ConfigDB.php";
include_once "ConnectDB.php";
include_once "helpers.php";

$id = $_REQUEST['id'];

$sql = "DELETE FROM distro WHERE id = :id";

$result = $pdo->prepare($sql);

$result->execute(['id' => $id]);

header("Location: ReadRecordOnDB.php");