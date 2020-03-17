<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];
$fechaNacimiento = $_POST['fecha'];
$grado = $_POST['grado'];
$genero = $_POST['genero'];
$añoactual = 2020;
$edad = $añoactual-($fechaNacimiento);

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su edad es: " . $edad . " años \r\n";
$mensaje .= "Su grado academico es: " . $grado . " \r\n";
$mensaje .= "Su género es: " . $genero . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'andres150098@gmail.com';
$asunto = 'Mensaje de Musically.com';

mail($para, $asunto, $mensaje, $header);

header("Location:NewMessage.html");
?>
