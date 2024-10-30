<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_usuario'])) {
 
    $nombreUsuario = $_POST['nombre_usuario'];
    setcookie('usuario', $nombreUsuario, time() + (86400 * 30)); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h1>Ingrese su nombre de usuario</h1>
    
    <?php if (isset($_COOKIE['usuario'])): ?>
        <p>Último nombre de usuario ingresado: <?php echo htmlspecialchars($_COOKIE['usuario']); ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
