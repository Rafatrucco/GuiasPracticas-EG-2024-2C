<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
}


header("Location: mostrar_sesion.php");
exit();
?>

