<?php
session_start();

$host = 'localhost'; 
$db = 'base2';
$user = 'root'; 
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8"); // Asegura el uso de caracteres especiales

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT nombre FROM alumnos WHERE mail = ?");
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $stmt->store_result();
    $stmt->bind_result($nombre);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        $_SESSION['nombre'] = $nombre; 
        echo "<p>Alumno encontrado: $nombre</p>";
        echo '<p><a href="ver_alumno.php">Ver detalles del alumno</a></p>';
    } else {
        echo "<p>No se encontró un alumno con ese email.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Email no proporcionado.</p>";
}

$conn->close();
?>
