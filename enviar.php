<?php
$nombres = $_POST['names'];
$apellido = $_POST['apellido'];
$telefono = $_POST['phoneNumber'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$mensaje = "Este mensaje fue enviado por " . $nombres . $apellido . ",\r\n";
$mensaje = "Su telefono es: " . $telefono . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
​
$para = 'whitenorth2021@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';
​
mail($para, $asunto, utf8_decode($mensaje), $header);
​
header('Location:index.html');


?>