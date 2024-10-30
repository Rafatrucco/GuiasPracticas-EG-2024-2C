<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Sesión</title>
</head>
<body>
    <h1>Datos de sesión</h1>

    <?php if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])): ?>
        <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        <p><strong>Clave:</strong> <?php echo htmlspecialchars($_SESSION['clave']); ?></p>
    <?php else: ?>
        <p>No hay datos de sesión disponibles. Asegúrate de iniciar sesión primero.</p>
    <?php endif; ?>

    <p><a href="login.php">Volver al formulario de login</a></p>
</body>
</html>

