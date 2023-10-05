<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conection.php");

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (nombre, apellido, usuario, password, email) VALUES ('$nombre', '$apellido', '$usuario', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir de vuelta a formulario.php con un parámetro en la URL
        header("Location: form.php?registro_exitoso=true");
        exit();
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Cierre de la conexión a la base de datos
$conn->close();
?>
