<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscador de Canciones</title>
</head>
<body>


<?php
include("conexion.inc");


// Obtener la palabra ingresada
$pal = $_POST['Palabra'] ?? '';


// Si se ha ingresado una palabra para buscar
if ($pal) {
    // Realizar la consulta
    $vSql = "SELECT * FROM buscador WHERE canciones LIKE ?";
    $stmt = mysqli_prepare($link, $vSql);
    $param = "%$pal%";
    mysqli_stmt_bind_param($stmt, 's', $param);
    mysqli_stmt_execute($stmt);
    $vResultado = mysqli_stmt_get_result($stmt);


    // Verificar resultados
    if (mysqli_num_rows($vResultado) == 0) {
        echo 'No hay canciones que coincidan. Por favor busque otra.';
        echo '<br><a href="FormBuscador.html">Volver al inicio</a>';
    } else {
        echo "<center><strong>RESULTADOS DE BÚSQUEDA</strong></center><br>";
        echo "<table border='1'><tr><th>Canciones</th></tr>";
       
        while ($cat = mysqli_fetch_assoc($vResultado)) {
            echo "<tr><td>" . htmlspecialchars($cat['canciones']) . "</td></tr>";
           
        }
        echo "</table>";
        echo '<br><a href="FormBuscador.html">Volver al inicio</a>';
    }
    mysqli_stmt_close($stmt);
} else {
    // Formulario para buscar
    echo "<form name='FormBuscador' method='post' action=''>
            <input name='Palabra' type='text' id='Palabra' placeholder='Ingrese palabra'>
            <input type='submit' name='Submit' value='Buscar!'>
          </form>";
}


// Cerrar la conexión
mysqli_close($link);
?>


</body>
</html>


