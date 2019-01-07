<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$nombre = $_POST["nombre"];

$email = $_POST["email"];

$telefono = $_POST["telefono"];

$mensaje = $_POST["mensaje"];

$destino = "contacto@wivo.mx";



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'a2plcpnl0545.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contacto@wivo.mx';                 // SMTP username
$mail->Password = 'hn8XMizZVzm3';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('contacto@wivo.mx', 'Wivo Contacto');
$mail->addAddress($destino, $nombre);

$mail->Subject = 'Nuevo mensaje de Wivo';
$mensajeHtml = nl2br($mensaje);
$mail->Body    =

"
<html>

<body>

<h1>Recibiste un nuevo mensaje desde el formulario de Wivo</h1>

<p>Informacion enviada por {$nombre}:</p>

<p>Nombre completo: {$nombre}</p>

<p>Email: {$email}</p>

<p>Telefono de Contacto: {$telefono}</p>

<p>Mensaje: {$mensaje}</p>

</body>

</html>

<br />";

// Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
//    echo 'El mensaje se ha enviado correctamente';
     header("Location:../index.html");
}
