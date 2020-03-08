<?php
//llamando los campos
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//datos para el correo
$para = "andres150098@yopmail.com";
$asunto = "Nuevo Mensaje de $nombre";

$mensaje = "
Nombre del remitente: ".$nombre."
Correo  :  ".$email."
Mensaje :  ".$mensaje."
";

mail($para,$asunto,utf8_decode($mensaje));
header('Location:NewMessage.html');
?>
