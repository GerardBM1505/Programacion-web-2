<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ARANAS"; // Nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
