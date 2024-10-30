<html>
<head>
    <title> Listado de Ciudades con PAGINACIÓN </title>
</head>
<body>
<?php
include("conexion.inc");  


$Cant_por_Pag = 2;


$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $Cant_por_Pag;




$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros = mysqli_num_rows($vResultado);




$total_paginas = ceil($total_registros / $Cant_por_Pag);


echo "Número de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran páginas de " . $Cant_por_Pag . " registros cada una<br>";
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";




$vSql = "SELECT * FROM Ciudades LIMIT $inicio, $Cant_por_Pag";
$vResultado = mysqli_query($link, $vSql);
?>




<table border=1>
    <tr>
        <th><b>Ciudad</b></th>
        <th><b>País</b></th>
        <th><b>Habitantes</b></th>
        <th><b>Superficie</b></th>
        <th><b>Tiene Metro</b></th>
    </tr>


<?php


while ($fila = mysqli_fetch_array($vResultado)) {
?>
    <tr>
        <td><?php echo htmlspecialchars($fila['ciudad']); ?></td>
        <td><?php echo htmlspecialchars($fila['pais']); ?></td>
        <td><?php echo htmlspecialchars($fila['habitantes']); ?></td>
        <td><?php echo htmlspecialchars($fila['superficie']); ?></td>
        <td><?php echo $fila['tieneMetro'] ? 'Sí' : 'No'; ?></td>
    </tr>
<?php
}


mysqli_free_result($vResultado);




mysqli_close($link);
?>
</table>




<?php
if ($total_paginas > 1) {
    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i) {
            echo $pagina . " ";
        } else {
           
            echo "<a href='listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
        }
    }
}
?>




<p align="center"><a href="Menu.html">Volver al menú del ABM</a></p>


</body>
</html>
