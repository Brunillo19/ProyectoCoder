<?php

$nombre = $_POST ['nombre']:
$numero = $_POST ['telefono']:
$email = $_POST ['email']:
$tema = $_POST ['asunto']:
$caja = $_POST ['caja']:



$mensaje = "El mensaje fue enviado por " . $nombre. ",\r\n";
$mensaje = "Su número es" . $numero . ",\r\n";
$mensaje .= "Su mail es:" . $mail . " \r\n";
$mensaje .= "El asunto es:" . $tema . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'iglesiasb11@gmail.com';
$asunto = 'Mensaje BI Fotografía'

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");

?>