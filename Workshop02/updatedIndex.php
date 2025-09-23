<?php
include("insert.php");

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop_02</title>
</head>

<body>
    <?php insertarDatos($name, $lastname, $email, $phone); ?>
    <h1>INFORMACION GUARDADA EN LA BASE DE DATOS SATISFACTORIAMENTE</h1>
    <a href="index.html">Regresar al formulario</a>
    <p>Datos: <?php echo "$name ", "$lastname ", "$email ", "$phone" ?></p>
</body>

</html>