<?php
$name = $_POST['nombre'];
$telefono = $_POST['telefono'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com';

$subject = 'REAL DE LUTECIA - Nosotros te llamamos';

$headers = "From: no-reply@realdelutecia.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.privadalapurisima.com/contacto3.php</strong>';
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

<div class="contacto-3">
<div class="wrapper">

<h2 class="mt20">Nosotros te llamamos</h2><br/>
<h4>Hemos recibido tu mensaje</h4>
<p>Pr&oacute;ximamente recibi&aacute;s respuesta por parte de alguno de nuestros ejecutivos</p>

<div class="clearfix"></div>
</div>
</div>

<?php include('inc/footer.inc'); ?>

</body>
</html>





