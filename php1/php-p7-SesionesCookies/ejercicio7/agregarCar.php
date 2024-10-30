<?php
session_start();
extract($_REQUEST);

// Conexión a la base de datos usando mysqli
$conexion = new mysqli("localhost", "root", "marco", "carro");

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Si no se especifica cantidad, se establece a 1
if (!isset($cantidad)) {
    $cantidad = 1;
}

// Preparar la consulta para evitar inyecciones SQL
$stmt = $conexion->prepare("SELECT * FROM catalogo WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    // Comprobar si el carro existe en la sesión
    if (isset($_SESSION['carro'])) {
        $carro = $_SESSION['carro'];
    } else {
        $carro = array();
    }

    // Agregar el producto al carro
    $carro[md5($id)] = array(
        'identificador' => md5($id),
        'cantidad' => $cantidad,
        'producto' => $row['producto'],
        'precio' => $row['precio'],
        'id' => $id
    );

    // Guardar el carro actualizado en la sesión
    $_SESSION['carro'] = $carro;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();

// Redireccionar a catalogo.php
header("Location: catalogo.php?" . SID);
exit();
?>

