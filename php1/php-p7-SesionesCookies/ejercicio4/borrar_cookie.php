<?php
// Borrar la cookie configurando su tiempo de expiración en el pasado
setcookie('tipo_titular', '', time() - 3600); // Expira inmediatamente
header("Location: periodico.php"); // Redirige a la página principal
exit();
?>
