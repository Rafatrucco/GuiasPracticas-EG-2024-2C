<?php
function comprobar_nombre_usuario($nombre_usuario){


    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
         echo $nombre_usuario . " no es válido<br>";
         return false;
        }
       
        //compruebo que los caracteres sean los permitidos
         $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
         for ($i=0; $i<strlen($nombre_usuario); $i++){
             if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
             echo $nombre_usuario . " no es válido<br>";
              return false;
         }
        }
        echo $nombre_usuario . " es válido<br>";
         return true;
         }
    
// Script de prueba
$usuarios_a_probar = [
    "usuario",       // Válido
    "us",         // No válido (demasiado corto)
    "usuario123", // Válido
    "Rafa-trucco",  // Válido (contiene '-')
    "Rafa_trucco",  // Válido (contiene '_')
    "Usu4rio!",  // No válido (contiene '!')
    "nombredeusuariomuylargo", // No válido (demasiado largo)
    "12345",      // Válido (solo números)
    "rafa@trucco",  // No válido (contiene '@')
];


// Probar cada nombre de usuario
foreach ($usuarios_a_probar as $usuario) {
    comprobar_nombre_usuario($usuario);
}


?>