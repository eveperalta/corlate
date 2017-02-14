<?php 
	$destino = "info@truitttranslations.com";
	$nombre = $_POST["first_name"];
	$apellido = $_POST["last_name"];
	$correo = $_POST["email"];
	$link = $_POST["website"];
	$mensaje = $_POST["comment"];
	$contenido = "Nombre: " . $nombre . "\nCorreo :". $correo . "\nMensaje: ". $mensaje;
	mail($destino, $contenido);
	header("location:index.html");
?>