<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vIdCiud = $_POST['id'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM Ciudades WHERE id ='$vIdCiud' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Ciudad Inexistente...!!! <br>");
 echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
 <td width="103"> id </td>
 <td width="243"> <input type="number" name="Id" value="<?php echo $fila['id']; ?> <?php
echo($fila['id']); ?>>
 </td>
</tr>
<tr>
 <td width="103"> Ingrese su Legajo: </td>
 <td width="243"> <input type="TEXT" name="ClaveUsuario" size="20" maxlength="20"
 value="<?php echo($fila['legajo']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> D.N.I.: </td>
 <td width="243"> <input type="TEXT" name="DNI" size="20" maxlength="20"
 value="<?php echo($fila['dni']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> eMail: </td>
 <td width="243"> <input type="TEXT" name="eMail" size="20" maxlength="40"
 value="<?php echo($fila['email']); ?>">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
