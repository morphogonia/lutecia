<?php
$name = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$datepicker = $_POST['datepicker'];
$horario = $_POST['horario'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com';

$subject = 'REAL DE LUTECIA - Agenda una cita';

$headers = "From: no-reply@realdelutecia.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr><tr><td><strong>E-mail:</strong></td><td>';
$message .= $correo;
$message .= '</td></tr><tr><td><strong>Fecha:</strong></td><td>';
$message .= $datepicker;
$message .= '</td></tr><tr><td><strong>Hora:</strong></td><td>';
$message .= $horario;
$message .= ':00 HRS';
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.realdelutecia.com/contacto2.php</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');
?>

<!Doctype html>
<head>
	<title>Real de Lutecia - Haz una Cita</title>
	<?php include('inc/head.inc'); ?>
</head>
<body>

<?php include('inc/header.inc'); ?>

<div class="contacto-2">
<div class="wrapper">

<h2 class="mt20">Agenda una cita</h2>

<h4>Hemos recibido tu mensaje</h4>
<p>Pr&oacute;ximamente recibi&aacute;s respuesta por parte de alguno de nuestros ejecutivos</p>

<div class="clearfix"></div>
</div>
</div>

<?php include('inc/footer.inc'); ?>

</body>
</html>

