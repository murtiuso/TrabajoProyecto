<?php
/**
 * Created by PhpStorm.
 * User: murtiuso
 * Date: 09/11/2017
 * Time: 10:10
 */

function checkUser ($userName, $password, $pdo) {

    // prepare devuelve un método llamado result. El -> es como el . de java.


    $sql = ("SELECT * from users");

    // pdo tiene el método prepare

    $result = $pdo->prepare($sql);

    // result se convierte en un pdostatement, q tiene el método execute.
    $result->execute([
        'userName' => $userName,
        'password' => $password,
        ]);

    // fetch pide el primer registro q tenga el conjunto de datos de resultado. El fetch assoc es para q devuelva un array asociativo

    // dameDato($result);

   /* $length= count($result);

    for($i=0; $i<$length; $i++)
    {
        echo $result[$i];
        echo "<br>";
    }*/

    return $result->fetch(PDO::FETCH_ASSOC);
}

?>