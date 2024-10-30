
<?php
// Inicia la variable de visitas
if (!isset($_COOKIE['visitas'])) {
    $visitas = 1;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 365); // Válida por un año
} else {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 365); // Actualiza la cookie
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <?php
    // Mensaje para el usuario
    if (!isset($_COOKIE['visitas'])) {
        echo "Bienvenido, esta es la primera vez que visitás esta página.";
    } else {
        echo "Esta es tu visita número " . $visitas; // Utiliza la variable $visitas
    }
    ?>
</body>
</html>
