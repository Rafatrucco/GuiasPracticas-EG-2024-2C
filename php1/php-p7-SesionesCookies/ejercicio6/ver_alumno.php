
<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Alumno</title>
</head>
<body>
    <h1>Detalles del Alumno</h1>

    <?php if (isset($_SESSION['nombre'])): ?>
        <p><strong>Nombre del alumno:</strong> <?php echo htmlspecialchars($_SESSION['nombre']); ?></p>
    <?php else: ?>
        <p>No puede visitar esta página. No hay un alumno registrado.</p>
    <?php endif; ?>

    <p><a href="formulario.php">Volver a buscar otro alumno</a></p>
</body>
</html>
