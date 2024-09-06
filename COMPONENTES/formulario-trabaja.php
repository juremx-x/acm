<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        /* Estilos para el contenedor del formulario */
        .form-container {
            width: 80%;
            margin: 0 auto;
        }

        /* Estilos generales para las filas de entrada */
        .input-row {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        /* Estilos para los campos de entrada */
        input[type="text"],
        input[type="email"],
        select,
        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            height: 70px;
            font-family: 'Poppins', sans-serif;
        }

        /* Estilos específicos para el campo "Nombre Completo" */
        .full-width {
            width: 100%;
        }

        /* Estilos para la disposición en dos columnas */
        .two-columns {
            display: flex;
            justify-content: space-between;
        }

        /* Estilos para cada columna */
        .two-columns .input-row {
            width: 48%;
        }

        /* Estilos para el botón de envío */
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilos para el popup */
        .popup {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .popup-content {
            text-align: center;
        }

        .popup-close {
            margin-top: 10px;
            cursor: pointer;
            color: #007bff;
        }
    </style>
    <script>
        function showPopup(message) {
            var popup = document.getElementById('popup');
            var popupMessage = document.getElementById('popupMessage');
            popupMessage.innerHTML = message;
            popup.style.display = 'block';
        }
        
        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }
    </script>
</head>
<body>
    <div class="form-container">
        <form name="contactFormEmail" method="post" enctype="multipart/form-data" action="">
            <div class="input-row full-width">
                <input type="text" name="userName" required id="userName" placeholder="Nombre Completo*">
            </div>
            <div class="two-columns">
                <div class="input-row">
                    <input type="email" name="userEmail" required id="userEmail" placeholder="Correo*">
                </div>
                <div class="input-row">
                    <input type="text" name="userPhone" required id="userPhone" placeholder="Teléfono*">
                </div>
            </div>
            <div class="two-columns">
                <div class="input-row">
                    <input type="text" name="userPoblacion" required id="userPoblacion" placeholder="Población*">
                </div>
                <div class="input-row">
                    <select name="userCategory" required id="userCategory" style="color: #757579;">
                        <option value="" disabled selected>Categoría*</option>
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
            </div>
            <div class="input-row full-width">
                <input type="file" name="attachment" id="attachment" placeholder="Solicitud de Empleo">
            </div>
            <div class="input-row full-width">
                <input type="submit" name="send" value="ENVIAR">
            </div>
        </form>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <p id="popupMessage"></p>
            <button class="popup-close" onclick="closePopup()">Cerrar</button>
        </div>
    </div>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $poblacion = $_POST['userPoblacion'];
        $phone = $_POST['userPhone'];
        $asunto = $_POST['userCategory'];
        $attachment = $_FILES['attachment'];

        $mail = new PHPMailer(true);

        try {
           // Configuración del servidor SMTP
           $mail->isSMTP();
           $mail->Host = 'direem.com.mx';
           $mail->SMTPAuth = true;
           $mail->Username = 'hola@direem.com.mx';
           $mail->Password = 'DIREEM2024.';
           $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
           $mail->Port = 587;

            // Configuración del mensaje
            $mail->setFrom($email, $name);
            $mail->addAddress('hola@direem.com.mx');

            // Archivos adjuntos
            if (!empty($attachment['tmp_name'])) {
                $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
            }

            // Configuración de la codificación
            $mail->CharSet = 'UTF-8';

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Nuevo mensaje de solicitud de empleo';
            $mail->Body = "
                <h2>Nuevo mensaje de formulario de contacto</h2>
                <p><strong>Nombre Completo:</strong> $name</p>
                <p><strong>Correo:</strong> $email</p>
                <p><strong>Población:</strong> $poblacion</p>
                <p><strong>Teléfono:</strong> $phone</p>
                <p><strong>Asunto:</strong> $asunto</p>
            ";

            $mail->send();
            $message = "Tu información de contacto se ha recibido correctamente.";
        } catch (Exception $e) {
            $message = "Hubo un error al enviar el correo electrónico: {$mail->ErrorInfo}";
        }
        
        // Generar el código JavaScript para mostrar el popup
        echo "<script type='text/javascript'>showPopup('$message');</script>";
    }
    ?>
</body>
</html>
