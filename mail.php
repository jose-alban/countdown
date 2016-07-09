<?php
	$destino="lisbethbalabarca@gmail.com"
	$correo= $_POST["email"]

	$contenido= "Hola este es mi correo" . $correo . "solicito que me puedan enviar la información.";
	mail($destino , $contenido);
?>