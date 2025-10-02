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

function getUserByName($name)
{
    $conn = new mysqli("localhost", "root", "", "workshop03");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "SELECT u.*, s.state 
            FROM users u
            LEFT JOIN state s ON u.stateId = s.id
            WHERE u.name = '$name'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $conn->close();
        return $data;
    } else {
        $conn->close();
        return null;
    }
}
?>

