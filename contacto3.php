<!Doctype html>
<head>
	<title>Real de Lutecia - Haz una Cita</title>
	<?php include('inc/head.inc'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('ul#menu li:nth-child(6) a').addClass('selected');
			$('ul#contacto li:nth-child(3) a').addClass('active');
		});
		
		function validacion() {
			v_nombre = document.getElementById('nombre').value;
			if( v_nombre == null || v_nombre.length <= 3 || /^\s+$/.test(v_nombre) ) {
				document.getElementById('adv_n').innerHTML='* Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_n').innerHTML='';
			}

			v_mensaje = document.getElementById('telefono').value;
			if( v_mensaje == null || v_mensaje.length <= 5 || /^\s+$/.test(v_mensaje) ) {
				document.getElementById('adv_m').innerHTML='* Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_m').innerHTML='';
			}
			
		return true;
		}
	</script>		
</head>
<body>

<?php include('inc/header.inc'); ?>

<div class="contacto-3">
<div class="wrapper">

<h2 class="mt20">Nosotros te llamamos</h2>

<!-- ================================================================================================================================================ -->
<div id="thx">
<form id="myform" name="myform" action="contacto3_s.php" method="POST" onsubmit="return validacion()">
		<label>* Nombre completo <span id="adv_n"></span></label>
		<input type="text" name="nombre" id="nombre" />
		<label>* Número telefónico <span id="adv_m"></span></label>
		<input type="text" name="telefono" id="telefono"/>
		<input type="submit" value="Enviar" name="submit" id="submit"/>
		<div class="clearfix"></div>	
</form>
</div>


<div class="clearfix"></div>
</div>
</div>

<?php include('inc/footer.inc'); ?>

</body>
</html>













