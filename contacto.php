<?php

$destinatario = 'musicallycr@yopmail.com';

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'Enviado desde Musically.com';
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario,$correo,$mensajecompleto,$header);
echo "<script>alert(\"location.href='NewMessage.html'\")</script>"

?>
