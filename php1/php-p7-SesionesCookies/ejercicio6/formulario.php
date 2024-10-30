<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Email</title>
</head>
<body>
    <h1>Ingrese el Email del Alumno</h1>
    <form method="post" action="buscar_alumno.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Buscar Alumno</button>
    </form>
</body>
</html>
