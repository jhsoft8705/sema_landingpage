<?php
require '../vendor/autoload.php';
require_once("../config/conexion.php");
require_once("../models/Contacto.php");
use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Obtener credenciales desde .env
$smtp_host = $_ENV['SMTP_HOST'];
$smtp_port = $_ENV['SMTP_PORT'];
$smtp_user = $_ENV['SMTP_USER'];
$smtp_pass = $_ENV['SMTP_PASS'];
$smtp_from = $_ENV['SMTP_FROM'];

// Obtener los destinatarios y convertirlos en un array
$recipient_emails = explode(',', $_ENV['RECIPIENTS']);

$contacto = new Contacto();

switch ($_GET["op"]) {
    case 'register_contacto':
        try {
            if (
                !empty($_POST["f_nombre"]) && !empty($_POST["f_email"]) &&
                !empty($_POST["f_tel"]) && !empty($_POST["f_servicios"])
            ) {
                $nombre = $_POST["f_nombre"];
                $correo = $_POST["f_email"];
                $telefono = $_POST["f_tel"];
                $servicio = $_POST["f_servicios"];
                $mensaje = $_POST["f_mensaje"] ?? "sin mensaje";

                // Guarda en la BD
                $contacto->RegisterContacto($nombre, $correo, $telefono, $servicio, $mensaje);

                echo json_encode(["success" => true, "message" => "Registro exitoso"]);
            } else {
                echo json_encode(["success" => false, "message" => "Faltan datos obligatorios"]);
            }
        } catch (Exception $e) {
            echo json_encode(["success" => false, "message" => "Error al registrar: " . $e->getMessage()]);
        }
        break;

    //todo:enviar formulario 
    case 'send_email':
        $remitente_nombre = "Sema - Contacto"; // Puedes personalizar esto según tus necesidades
        $asunto = 'Nueva solicitud de información'; // Puedes personalizar esto según tus necesidades
        $result = enviar_mail($_POST["nombre"], $_POST["correo"], $_POST["telefono"], $_POST["servicio"], $_POST["mensaje"] ?? "sin mensaje", $remitente_nombre, $asunto);
        echo json_encode($result);
        break;

    case 'register_email_boletin':
        try {
            if (
                !empty($_POST["b_email"])
            ) {
                $b_email = $_POST["b_email"];

                // Guarda en la BD
                $contacto->RegisterBoletin($_POST["b_email"]);

                echo json_encode(["success" => true, "message" => "Registro exitoso"]);
            } else {
                echo json_encode(["success" => false, "message" => "Faltan datos obligatorios"]);
            }
        } catch (Exception $e) {
            echo json_encode(["success" => false, "message" => "Error al registrar: " . $e->getMessage()]);
        }
        break;

    //todo:enviar formulario 
    case 'send_email_boletin':
        $remitente_nombre = "Sema - Boletin"; // Puedes personalizar esto según tus necesidades
        $asunto = 'Nuevo Registro en Boletín'; // Puedes personalizar esto según tus necesidades
        $result = enviar_mail_boletin($_POST["b_email"], $remitente_nombre, $asunto);
        echo json_encode($result);
        break;
}


//todo:enviar formulario
function enviar_mail($nombre, $correo, $telefono, $servicio, $mensaje, $remitente_nombre, $asunto)
{
    global $smtp_host, $smtp_port, $smtp_user, $smtp_pass, $smtp_from, $recipient_emails;

    try {
        // Configuración de PHPMailer
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $smtp_port;

        $mail->setFrom($smtp_from, $remitente_nombre);

        // Agregar destinatarios
        foreach ($recipient_emails as $recipient) {
            $mail->addAddress(trim($recipient));
        }

        $mail->isHTML(true);
        $mail->Subject = $asunto;

        // Cargar la plantilla HTML y reemplazar las variables
        $template = file_get_contents('email_template.html');
        $template = str_replace('<?php echo $nombre; ?>', $nombre, $template);
        $template = str_replace('<?php echo $correo; ?>', $correo, $template);
        $template = str_replace('<?php echo $telefono; ?>', $telefono, $template);
        $template = str_replace('<?php echo $servicio; ?>', $servicio, $template);
        $template = str_replace('<?php echo $mensaje; ?>', $mensaje, $template);

        $mail->Body = $template;
        $mail->send();

        return ["success" => true, "message" => "Correo enviado"];
    } catch (Exception $e) {
        return ["success" => false, "message" => "Error al enviar el correo: " . $e->getMessage()];
    }
}
//todo:enviar formulario
function enviar_mail_boletin($correo, $remitente_nombre, $asunto)
{
    global $smtp_host, $smtp_port, $smtp_user, $smtp_pass, $smtp_from, $recipient_emails;

    try {
        // Configuración de PHPMailer
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $smtp_port;

        $mail->setFrom($smtp_from, $remitente_nombre);

        // Agregar destinatarios
        foreach ($recipient_emails as $recipient) {
            $mail->addAddress(trim($recipient));
        }

        $mail->isHTML(true);
        $mail->Subject = $asunto;

        // Cargar la plantilla HTML y reemplazar las variables
        $template = file_get_contents('boletin.html');
        $template = str_replace('<?php echo $correo; ?>', $correo, $template);

        $mail->Body = $template;
        $mail->send();

        return ["success" => true, "message" => "Correo enviado"];
    } catch (Exception $e) {
        return ["success" => false, "message" => "Error al enviar el correo: " . $e->getMessage()];
    }
}
