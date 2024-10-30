<?php
// Inicia sesión
session_start();

// Verifica si se ha enviado el formulario y guarda la selección en una cookie
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_titular'])) {
    $tipoTitular = $_POST['tipo_titular'];
    setcookie('tipo_titular', $tipoTitular, time() + (86400 * 30)); // Válida por 30 días
}

// Carga el tipo de titular guardado en la cookie si existe
$tipoTitularGuardado = isset($_COOKIE['tipo_titular']) ? $_COOKIE['tipo_titular'] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página del Periódico</title>
</head>
<body>
    <h1>Bienvenido al Periódico</h1>
    
    <form method="post" action="">
        <h2>Selecciona el tipo de titular que deseas ver:</h2>
        <label>
            <input type="radio" name="tipo_titular" value="politica" <?php if ($tipoTitularGuardado == 'politica') echo 'checked'; ?>> Noticia política
        </label><br>
        <label>
            <input type="radio" name="tipo_titular" value="economica" <?php if ($tipoTitularGuardado == 'economica') echo 'checked'; ?>> Noticia económica
        </label><br>
        <label>
            <input type="radio" name="tipo_titular" value="deportiva" <?php if ($tipoTitularGuardado == 'deportiva') echo 'checked'; ?>> Noticia deportiva
        </label><br>
        <button type="submit">Guardar</button>
    </form>

    <h2>Titulares</h2>
    <?php if ($tipoTitularGuardado): ?>
        <?php if ($tipoTitularGuardado == 'politica'): ?>
            <p><strong>Última noticia política:</strong> La política actual está en un punto de inflexión.</p>
        <?php elseif ($tipoTitularGuardado == 'economica'): ?>
            <p><strong>Última noticia económica:</strong> La economía mundial muestra signos de recuperación.</p>
        <?php elseif ($tipoTitularGuardado == 'deportiva'): ?>
            <p><strong>Última noticia deportiva:</strong> El equipo local ganó el campeonato.</p>
        <?php endif; ?>
    <?php else: ?>
        <p><strong>Titulares generales:</strong></p>
        <ul>
            <li>La política actual está en un punto de inflexión.</li>
            <li>La economía mundial muestra signos de recuperación.</li>
            <li>El equipo local ganó el campeonato.</li>
        </ul>
    <?php endif; ?>

    <p><a href="borrar_cookie.php">Borrar selección de titular</a></p>
</body>
</html>
