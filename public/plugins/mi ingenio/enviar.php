<?php 
$destino = "garciajimenez79@gmail.com";
$nombre = $_POST["Nombre"];
$telefono = $_POST["Telefono"];
$correo = $_POST["Correo"];
$mensaje = $_POST["Mensaje"];
$contenido = "Nombre: " .$nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Correo de Ingenio Online", $contenido);
header("location: gracias.html");
  


?> 