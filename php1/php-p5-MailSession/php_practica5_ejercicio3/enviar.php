<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$nombreAmigo = $_POST['nombreAmigo'];
$correoAmigo = $_POST['correoAmigo'];

// $destinatario = "'.$correoAmigo.'"; ERROR
$destinatario = $correoAmigo; // correcto
$asunto = "Recomendacion de pagina web";
$cuerpo= '
        <html> 
        <title>Ejercicio3 PHP</title>
        <body> 
        <h1> Hola, '.$nombreAmigo.' !</h1>
        <p> <strong> '.$nombre.' </strong> Quiere que conozcas esta nueva pagina!  </p>
        <p> <a href ="www.google.com.ar">google.com </a> </p>
        </body>

        </html>
        ';

// para el envio en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

//direccion del remitente
$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo Enviado";
    

?>
<br>
<a href="index.html">Volver a inicio</a>




