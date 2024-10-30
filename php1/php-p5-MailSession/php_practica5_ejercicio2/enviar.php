<?php
// Recojo datos. 
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$asuntoCorreo = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


// una vez que se envia el formulario, hay que recoger esos datos. 

//echo $correo."  ". $nombre. "  ". $mensaje ;

$destinatario = "truccorafael14062001@gmail.com";
$asunto = "Consulta sobre:" .$asuntoCorreo;
// cuerpo en formato html.
$cuerpo = '
        <html> 
            <head>  
                <title> Ejercicio2 </title>
            </head>

            <body>  
                <h1>Tienes una nueva consulta </h1>
                <p><strong>Nombre:</strong> '.$nombre.'</p>
                <p><strong>Email:</strong> '.$correo.'</p>
                <p><strong>Asunto:</strong> '.$asuntoCorreo.'</p>
                <p><strong>Mensaje:</strong><br> '.$mensaje.'</p>

                             

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

<a href="index.html">Volver a inicio</a>