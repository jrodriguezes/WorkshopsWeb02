<?php
function insertarDatos($name, $lastname, $email, $phone)
{
    // Datos de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workshop02";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono) 
            VALUES ('$name', '$lastname', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $conn->error;
    }

    $conn->close();
}
?>