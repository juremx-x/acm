<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $poblacion = $_POST['userPoblacion'];
    $phone = $_POST['userPhone'];
    $category = $_POST['userCategory'];
    $attachment = $_FILES['attachment'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'dominio:587';
        $mail->SMTPAuth = true;
        $mail->Username = 'correo@dominio';
        $mail->Password = 'contraseña';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Remitente y destinatarios
        $mail->setFrom('correo@dominio', 'Formulario de Contacto');
        $mail->addAddress('destinatario@dominio');

        // Archivos adjuntos
        if (!empty($attachment['tmp_name'])) {
            $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
        }

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de formulario de contacto';
        $mail->Body = "
            <h2>Nuevo mensaje de formulario de contacto</h2>
            <p><strong>Nombre Completo:</strong> $name</p>
            <p><strong>Correo:</strong> $email</p>
            <p><strong>Población:</strong> $poblacion</p>
            <p><strong>Teléfono:</strong> $phone</p>
            <p><strong>Categoría:</strong> $category</p>
        ";

        $mail->send();
        $message = 'Mensaje enviado correctamente';
    } catch (Exception $e) {
        $message = "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .input-row {
            margin-bottom: 15px;
        }
        .input-row label {
            display: block;
            margin-bottom: 5px;
        }
        .input-row input,
        .input-row select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .success {
            color: green;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form name="contactFormEmail" method="post" enctype="multipart/form-data" action="send_mail.php">
            <div class="input-row">
                <label>Nombre Completo<em>*</em></label>
                <input type="text" name="userName" required id="userName">
            </div>
            <div class="input-row">
                <label>Correo<em>*</em></label>
                <input type="email" name="userEmail" required id="userEmail">
            </div>
            <div class="input-row">
                <label>Población<em>*</em></label>
                <input type="text" name="userPoblacion" required id="userPoblacion">
            </div>
            <div class="input-row">
                <label>Teléfono<em>*</em></label>
                <input type="text" name="userPhone" required id="userPhone">
            </div>
            <div class="input-row">
                <label>Categoría<em>*</em></label>
                <select name="userCategory" required id="userCategory">
                    <option value="">Seleccione una categoría</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Almacén-Operativo">Almacén-Operativo</option>
                    <option value="Canal frío-Gestor de activos">Canal frío-Gestor de activos</option>
                    <option value="Contabilidad-Finanzas">Contabilidad-Finanzas</option>
                    <option value="Data">Data</option>
                    <option value="Jurídico">Jurídico</option>
                    <option value="Logística-Transporte-Distribución">Logística-Transporte-Distribución</option>
                    <option value="Mantenimiento de flotilla">Mantenimiento de flotilla</option>
                    <option value="Mercadotecnia-Diseño">Mercadotecnia-Diseño</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                    <option value="Ventas-Reparto">Ventas-Reparto</option>
                </select>
            </div>
            <div class="input-row">
                <label>Solicitud de Empleo</label>
                <input type="file" name="attachment" id="attachment">
            </div>
            <div class="input-row">
                <input type="submit" name="send" value="ENVIAR">
                <?php if (!empty($message)) { ?>
                    <div class='success'>
                        <strong><?php echo $message; ?></strong>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>
