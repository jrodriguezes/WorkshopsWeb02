<?php
function insertData($name, $lastname, $email, $phone, $stateId)
{
    // Datos de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workshop03";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO users (name, lastname, gmail, tel, stateId) 
            VALUES ('$name', '$lastname', '$email', '$phone', '$stateId')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $conn->error;
    }
    $conn->close(); 
}
?>