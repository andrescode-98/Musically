<?php
$result="";
if(isset($_POST['submit'])){
    require 'php/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.yopmail.com';
    $mail->Port=587; // un puerto que no este bloqueado
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls'; //hace que la conexion sea segura
    $mail->Username= 'musicallycr@yopmail.com';
    $mail->Password= '143186@AndresyNathan';

    $mail->setFrom($_POST['email'],$_POST['nombre']);//obtiene correo y nombre del ususario
    $mail->addAddress('musicallycr@yopmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject='Correo Enviado Por: '.$_POST['nombre'];
    $mail->Body='Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Mensaje : '.$_POST['mensaje'];

    if(!$mail->send()){
       $result = "Algo salio mal, Intentalo de nuevo.";
    }else{
        $result='location:NewMessage.html';
    }
}
?>
