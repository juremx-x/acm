<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Correo electrónico al que se enviará el mensaje
    $destinatario = "ennovajesus@gmail.com";
    $asunto = "Nuevo mensaje de contacto";

    $mensaje = "Correo Electrónico: $email\n";

    // Enviar correo
    if (mail($destinatario, $asunto, $mensaje)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    // Método no permitido
    http_response_code(405);
}
?>
