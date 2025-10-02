<?php
function getUserByName($name) {
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