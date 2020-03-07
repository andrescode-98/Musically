<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$para = "andres150098@yopmail.com";
$asunto = "Nuevo Mensaje de $nombre";

$mensaje = "
Nombre del remitente: ".$nombre."
Correo  :  ".$email."
Mensaje :  ".$mensaje."
";

mail($para,$asunto,utf8_decode($mensaje));
header("location: index.html");
?>
