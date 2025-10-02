<?php
include("bd/inserts.php");

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stateId = $_POST['state'];

$resultado = insertData($name, $lastname, $email, $phone, $stateId);

if ($resultado !== true) {
    echo "Error al registrar: $resultado";
    exit();
}
header("Location: login.php");
exit();
?>