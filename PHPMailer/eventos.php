<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$empresa = $_POST["empresa"];

$telefono = $_POST["telefono"];

$email = $_POST["email"];

$afiliado = $_POST["afiliado"];

$horario = $_POST["horario"];

$fecha = $_POST["fecha"];

$invitados = $_POST["invitados"];

$evento = $_POST["evento"];

$publico = $_POST["publico"];

$mensaje = $_POST["mensaje"];

$aviso = $_POST["aviso"];

$destino = "prueba@studio-8.co";



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.studio-8.co';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'prueba@studio-8.co';                 // SMTP username
$mail->Password = 'Pueb@s1540';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('prueba@studio-8.co', 'Publico Eventos');
$mail->addAddress($destino, $nombre);

$mail->Subject = 'Nuevo mensaje de Eventos Publico';
$mensajeHtml = nl2br($mensaje);
$mail->Body    =

"
<html>

<body>

<h1>Recibiste un nuevo mensaje desde el formulario de Eventos</h1>

<p>Informacion enviada por {$nombre}:</p>

<p>Nombre completo: {$nombre} {$apellido}</p>

<p>Empresa: {$empresa}</p>

<p>Telefono: {$telefono}</p>

<p>Email: {$email}</p>

<p>Tiene oficina en Publico?: {$afiliado}</p>

<h2>Informe del evento</h2>

<p>Horario: {$horario}</p>

<p>Fecha: {$fecha}</p>

<p>Numero de Invitados: {$invitados}</p>

<p>Tipo de Evento: {$evento}</p>

<p>Es para todo el publico?: {$publico}</p>

<p>Mensaje: {$mensaje}</p>

<p>Aviso: {$aviso}</p>

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
     header("Location:../agradecimiento.html");
}
