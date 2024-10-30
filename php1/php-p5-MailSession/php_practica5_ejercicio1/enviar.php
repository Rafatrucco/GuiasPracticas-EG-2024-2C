<?php


// Defino direccion de destinatario 
$destinatario = "truccorafael14062001@gmail.com";

// Asunto del correo
$asunto = "Ejercicio1, Practica 5- PHP";

// Cuerpo del mensaje en formato HTML
// $cuerpo = "Esto es una prueba de envío de correo a través del servidor";

$cuerpo = '
            <html> 
            <head>
                <title>Prueba de envio de correo HTML </title>
            </head>
            <body> 
            <h1 style="color:blue;">Este es un mensaje de prueba en formato HTML! </h1>
            <p>Este correo ha sido enviado desde un <strong> Script PHP </strong> con Formato HTML. </p><br>
            <p> <a href="https://www.google.com.ar">Visita nuestro sitio web</a></p>
            
            </body>
            </html>
        
            ';

// Encabezados para indicar que el contenido es HTML y definir el remitente
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Rafael Trucco <remitente@ejemplo.com>\r\n";



// Enviar el correo usando la función mail()
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado exitosamente.";
} else {
    echo "Hubo un problema al enviar el correo.";
}


?>