<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vIdCiud = $_POST['id'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHab = $_POST['habitantes'];
$vSup = $_POST['superficie'];
$vMetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE Ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHab', superficie='$vSup', tieneMetro='$vMetro' where
id='$vIdCiud'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La Ciudad fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>