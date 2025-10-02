<?php
function getStates()
{
    // Datos de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workshop03";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM state";
    $result = $conn->query($sql);

    $provincias = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $provincias[] = $row; // cada fila es ['id'=>1, 'state'=>'San José']
        }
    }

    $conn->close();
    return $provincias;
}

function getUserData($name)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workshop03";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
}
?>