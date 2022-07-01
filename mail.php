<?php 

// Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './mail/src/Exception.php';
    require './mail/src/PHPMailer.php';
    require './mail/src/SMTP.php';


    $data = $_POST;

    $header_email ="<HTML> "
            . "<HEAD> "
                . "<meta charset='UTF-8'>"
                . "<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
                . "<meta http-equiv='X-UA-Compatible' content='ie=edge'>"
            . "</HEAD> "
            . "<BODY> "
                . "<div style='background-color: white; text-align:center; padding: 1em;text-alight:left;'>"
                    ."<img src='https://pixelagency.co/img/logo%20final%20principal.png' style='width: 15%; '>"
                . "</div>"
                . "<div style='background-color: white; padding: 1em; Text-align: center; border-bottom: 1px solid #f2f2f2'>"
                    ."<p style='Color: #361dba; text-transform:uppercase;'> Mensaje enviado por <b>". $data['Nombre']  ."</b></p>"
                . "</div>"
                . "<div style='padding: 3em;'>";

    $body_email = "<div style='text-alight:center;'>"
                        ."<h2 style='color:#1a0b5a; font-weith:bold'>Datos del cliente</h2>"
                        ."<p> <b>Tipo de servicio: </b> ".  $data["portafolioPixel"] ."</p>"
                        ."<p> <b>Nombre: </b> ".  $data["Nombre"] ."</p>"
                        ."<p> <b>Email: </b> ".  $data["email"] ."</p>"
                        ."<p> <b>Celular: </b> ".  $data["celular"] ."</p>"
                        ."<p> <b>Empresa: </b> ".  $data["empresa"] ."</p>"
                        ."<p> <b>Mensaje: </b> ".  $data["Mensaje"] ."</p>"
                ."</div>";

    $footer_Email = "<div style='display: flex; color: #361dba; border-top:1px solid #f2f2f2; text-align: center; align-items: center; padding:1em; justify-content: center;'>"
                        . "<div style='margin: 0 auto;'>"
                            ."<p style='text-alight: center;text-transform: uppercase;'> Pixel Agency, Desarrollo Creativo</p>"
                        . "</div>"
                    . "</div>"
                . "</BODY> "
                . "</HTML> ";

    $emailCompleto = $header_email . $body_email  .$footer_Email;

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'pixelagency.co';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hola@pixelagency.co';                     // SMTP username
        $mail->Password   = '1cXFs2g4DTXkwTyX';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('info@pixelagency.co', 'Mensaje de la pagina');
        $mail->addAddress("daniellein17@gmail.com");               // Name is optional

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje por '.$data["Nombre"];
        $mail->Body    = $emailCompleto;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviando…</title>
</head>
<body>
</body>
</html>