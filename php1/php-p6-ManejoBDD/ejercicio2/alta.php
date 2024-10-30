<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vIdCiud = $_POST['id'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHab = $_POST['habitantes'];
$vSup = $_POST['superficie'];
$vMetro = $_POST['tienemetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(Id) as canti FROM Ciudades WHERE Id='$vIdCiud'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantCiudades = mysqli_result($vResultado, 0);
if ($vCantCiudades ['canti']!=0){
 echo ("La ciudad ya existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO Ciudades (id,ciudad,pais,habitantes,superficie,tieneMetro)
values ('$vIdCiud','$vCiudad', '$vPais', '$vHab', '$vSup', '$vMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La Ciudad fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a
nuestra pagina<br>");
 echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>