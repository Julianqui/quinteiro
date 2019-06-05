<?php
try {
    $mbd = new PDO('mysql:host=localhost;port:8889;dbname=usuario', $usuario, $contrasena);
    foreach($mbd->query('SELECT * from FOO') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibido</title>
</head>
<body>
    Hola <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
    Tu email es: <?php isset($_POST["contrasena"]) ? print $_POST["contrasena"] : ""; ?>
</body>
</html>