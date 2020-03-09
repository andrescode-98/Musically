<?php
//llamando los campos
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//datos para el correo
$para = "andres150098@gmail.com";
$asunto = "Nuevo Mensaje de $nombre";

$cuerpo = "De: $nombre\n";
$cuerpo = "Correo: $email\n";
$cuerpo = "Mensaje: $mensaje\n";

mail($para,$asunto,utf8_decode($cuerpo));
header('Location: NewMessage.html')
?>
