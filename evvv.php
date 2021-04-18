<?php

// Llamando a los campos
$nombre = $_POST [ 'nombre'];
$nombre = $_POST [ 'correo'];
$nombre = $_POST [ 'telefono'];
$nombre = $_POST [ 'mensaje'];


// datos para el correo
$destinatario = "danielfparaque@gmail.com"
$asunto= "contacto desde nuestra web"

$carta = "De: $nombre \n";
$carta .= "correo: $correo \n";
$carta .= "telefono: $telefono \n"
$carta .= "mensaje: $mensaje";

//enviando mensaje
mail($destinatario, $asunto, $carta);


?>