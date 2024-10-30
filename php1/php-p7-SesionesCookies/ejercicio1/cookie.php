<?php
//Veo si recibo datos del formulario
if(isset($_POST['estilo'])){
    //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies.
    $estilo = $_POST['estilo'];
    //meto el estilo en una cookie
    setcookie("estilo",$estilo,time()+(60 * 60 * 24 * 90));
}else{
    //si no he recibido el estilo que desea el usuario en la pagina, miro si hay una cookie creada
    if(isset($_COOKIE["estilo"])){
        //es que tengo la cookie
        $estilo = $_COOKIE["estilo"];
    }
}


if(isset($estilo)){
    echo '<link rel="stylesheet" href="' .$estilo. '.css">';
    echo '<a href="index.html">Volver a menu</a>';
}




?>
