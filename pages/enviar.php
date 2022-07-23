<?php

$nombre = $_POST['nombre'];
$numero = $_POST['telefono'];
$email = $_POST['email'];
$caja = $_POST['caja'];


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Su teléfono es " . $numero . ",\r\n";
$mensaje .= "Mensaje: " . $caja . ",\r\n";
$mensaje .= "Enviado el: " . date("d/m/y", time());


mail('iglesiasb11@gmail.com', 'Comentario en BI Fotografía',utf8_decode( $mensaje) );

header('Location: exito.html');

?>