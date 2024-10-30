<?php
session_start();


// Valido que la variable contador exista, caso contrario se crea.

if( isset($_SESSION['contador'])){
    // Si existe, incrementar contador.
    $_SESSION['contador']++;
}else {
    // No existe, se crea contador.
    $_SESSION['contador'] = 1; 
}


// Muestro contador de paginas visitadas.

echo "Has visitado: ".$_SESSION['contador']. " pagina(s) durante esta sesion.";
 

// Agrego ademas
if(isset($_POST['reiniciar'])){
    session_destroy(); // destruir la sesion y reiniciar contador.
    header("Location: index.php"); // Redirigir a la página principal porque sino el boton se me borra.
    // exit();


}

// echo '
// <br><br>
// <form method="post">
//     <button type="submit" name="reiniciar">Reiniciar Contador</button>
// </form>
// '
?>
<br><br>
<form method="post">
    <button type="submit" name="reiniciar">Reiniciar Contador</button>
</form>