<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader  https://github.com/PHPMailer/PHPMailer->composer require phpmailer/phpmailer
require '../vendor/autoload.php';
 
/*Using local phpmailer if not composer
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';*/

require_once("../config/conexion.php");
require_once("../models/Llamada.php");
$llamada = new Llamada();

/* TODO: Obtener datos según op */
switch ($_GET["op"]) {
    case 'register_call':
        try {
            $llamada->Register_call(
                $_POST["txtnombre"],  //HTML_VIEW_FORM
                $_POST["txttelefono"], 
            ); 
            // Registro exitoso
            echo "successfully"; 
        } catch (Exception $e) { 
            echo "Error al registrar datos a  BD: " . $e->getMessage();
        }
    break;

    case 'send_email_call':
        try{
            if (isset($_POST["txtnombre_recibido_js"]) && isset($_POST["txttelefono_recibido_js"])) {
                $nombre = $_POST["txtnombre_recibido_js"];
                $telefono = $_POST["txttelefono_recibido_js"];
                $mail = new PHPMailer(true);    
                 // Envía un correo electrónico  
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
                $mail->SMTPAuth = true;
                $mail->Username = 'jhsoftperu@gmail.com'; // Correo electrónico desde el que se enviará
                $mail->Password = 'tcczhgnqjryqblke';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar TLS
                $mail->Port = 587; // Puerto SMTP de Gmail

                $mail->setFrom('jhsoftperu@gmail.com', 'Jh Soft Peru'); // Dirección y nombre que aparecerán como remitente
                $mail->addAddress('jhonalexvillaflores@gmail.com'); // Dirección de correo electrónico del destinatario
                //$mail->addAddress('otrodestinatario@example.com', 'Nombre Destinatario 2');

                $mail->isHTML(true);
                $mail->Subject = 'Nueva solicitud de llamada'; 
                $body = '<html><body>';
                $body .= '<table>';
                // Ruta absoluta completa a la imagen
                //$body .= '<tr><td><img src="http://localhost/WebsiteJhsoft-2023/images/logo.png" alt="Logo de la empresa"></td></tr>';
                $body .= '<tr><td>Se ha recibido una nueva solicitud de llamada con la siguiente información:</td></tr>';
                $body .= "<tr><td>Nombre: $nombre</td></tr>";
                $body .= "<tr><td>Teléfono: <a href=\"tel:$telefono\">$telefono</a></td></tr>";
                $body .= '</table>';
                $body .= '</body></html>'; 
                $mail->isHTML(true);
                $mail->Body = $body;  
                $mail->send(); // Envía el correo electrónico 
                echo "Send successfully"; 

            }else{
                echo "Fallo al enviar el Email"; 
            }
    
            }catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
        }
    break;
    
    default:
        echo "Error, controllerLlamada"; 
    break;
}
?>
