<?php
	$destino = "lisbethbalabarca@gmail.com";
	$subject = "Tourstap Subscription - Counter Page";
	$correo = $_POST["email"]
	$contenido = "Hola este es mi correo " . $correo . ", solicito que me puedan enviar la información.";
	
	mail($destino, $subject, $contenido);
?>
