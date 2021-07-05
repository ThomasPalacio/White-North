<?php
$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$message = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$message = "Su telefono es: " . $telefono . ",\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());
​
$para = 'whitenorth2021@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';
​
mail($para, $asunto, utf8_decode($message), $header);
​
header('Location:index.html');


?>