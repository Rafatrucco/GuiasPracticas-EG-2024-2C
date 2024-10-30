<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Formulario de Login</h1>
    <form method="post" action="guardar_sesion.php">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br>
        
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave" required><br>
        
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
