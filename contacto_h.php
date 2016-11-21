<?php
$name = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$to = 'rojobara@gmail.com, aweisspick@gmail.com';

$subject = 'REAL DE LUTECIA - Desde Homepage';

$headers = "From: no-reply@realdelutecia.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $name;
$message .= '</td></tr><tr><td><strong>E-mail:</strong></td><td>';
$message .= $correo;
$message .= '</td></tr><tr><td><strong>Tel&eacute;fono:</strong></td><td>';
$message .= $telefono;
$message .= '</td></tr><tr><td><strong>Mensaje:</strong></td><td>';
$message .= $mensaje;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.realdelutecia.com</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');
?>

<!Doctype html>
<head>
	<title>Real de Lutecia</title>
	<?php include('inc/head.inc'); ?>
</head>
<body>

<?php include('inc/header.inc'); ?>

<div class="contacto-1">
<div class="wrapper">

<h2 class="mt20">Mándanos un e-mail</h2><br/>

<h4>Hemos recibido tu mensaje</h4>
<p>Pr&oacute;ximamente recibi&aacute;s respuesta por parte de alguno de nuestros ejecutivos</p>


<div class="clearfix"></div>
</div>
</div>

<?php include('inc/footer.inc'); ?>

</body>
</html>



