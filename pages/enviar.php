<?php

$nombre = $_POST['nombre'];
$numero = $_POST['telefono'];
$email = $_POST['email'];
$caja = $_POST['caja'];



$mensaje = <<<MAIL
El usuario $nombre, con número de teléfono $numero, ha realizado un comentario en tu sitio web. <br>
Comentario: $caja
MAIL;

$informacion_adicional = 'Mime-Version: 1.0'. ",\r\n";
$informacion_adicional .= 'Content-type: text/html; charset=UTF-8'. ",\r\n";
$informacion_adicional .= 'From: '. $nombre. '<'.$email.'>' "\r\n";


mail('iglesiasb11@gmail.com', 'Comentario en BI Fotografía', utf8_decode($mensaje), $informacion_adicional);

header("Location:exito.html");

?>