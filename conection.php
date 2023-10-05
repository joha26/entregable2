<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_ent";

// Conecta con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
