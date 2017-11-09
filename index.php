<?php


include_once "ConfigDB.php";
include_once "ConnectDB.php";
// include_once "DBHelpers.php";
include_once "helpers.php";
// cada usuario tendría su página. si un usuario no tiene nada creado, lo llevaría a add, si ya tiene algo creado, ¿llevarlo a add modificado para cada usuario o llavarlo a una página diferente?

// leer nombre de usuario, comprobar si existe, si existe y coinciden entrar a pág usu, sino, ir a refgistro
$errors=array();
$error = false;

$userName = "";
$password = "";
//$resultado;

if( !empty($_POST)) {
    $userName = htmlspecialchars(trim($_POST['userName']));
    $password = htmlspecialchars(trim($_POST['password']));
}
/* if( $userName == "" ){
$errors['userName']['required'] = "Debe ontroducir un nombre de usuario";
}
if( $password == "" ){
$errors['password']['required'] = "Debe introducir la contraseña";
}*/
/*if (empty($errors)){
$resultado = checkUser($userName, $password);
//dameDato($resultado);
}  else {
$error = true;
}*/
if ( empty($errors) ){
    $sql = "select * from users";
    $result = $pdo->prepare($sql);
    $result->execute([
        'userName'         => $userName,
        'password'          => $password
    ]);
    //$resultado = checkUser($userName, $password); // esto así da problemas
//header('Location: CreateNewDB.php');


}else{
    $error = true;
}

?>


<html lang="es">
<head>
    <meta charset="utf-8">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <title>INICIO</title>

</head>

<body>
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">INICIO</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Página de inicio</a></li>
                </ul>
            </div><!--/.nav-collapse -->

        </div>
    </nav>
</div>

<div class="container">

    <h2>Inicio de sesión</h2>
    <form method="post">
        <div class="form-group">
            <label for="userName">Introduzca su nombre de usuari@</label>
            <input type="text" class="form-control" id="userName" name="userName">
        </div>

        <div class="form-group">
            <label for="password">Introduzca su contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div>
            <input class="btn btn-info" type="submit" value="Enviar">
        </div>

        <?php dameDato($_POST); ?>
        <?php dameDato($resultado); ?>
        <?php dameDato($result); ?>
    </form>
</div>


</body>
</html>


