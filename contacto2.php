<!Doctype html>
<head>
	<title>Real de Lutecia - Haz una Cita</title>
	<?php include('inc/head.inc'); ?>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('ul#menu li:nth-child(6) a').addClass('selected');
			$('ul#contacto li:nth-child(2) a').addClass('active');
			$( "#datepicker" ).datepicker();
		});
		
		function validacion() {
			v_nombre = document.getElementById('nombre').value;
			if( v_nombre == null || v_nombre.length <= 3 || /^\s+$/.test(v_nombre) ) {
				document.getElementById('adv_n').innerHTML='* Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_n').innerHTML='';
			}

			v_mail = document.getElementById('correo').value;
			reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  			if(reg.test(v_mail) == false) {
				document.getElementById('adv_c').innerHTML='* Campo obligatorio';
  				return false;
  			} else {
				document.getElementById('adv_c').innerHTML='';
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

<div class="contacto-2">
<div class="wrapper">

<h2 class="mt20">Agenda una cita</h2>

<div id="thx">
<form id="myform" name="myform" action="contacto2_s.php" method="POST" onsubmit="return validacion()">
		<label>* Nombre completo <span id="adv_n"></span></label>
		<input type="text" name="nombre" id="nombre"/>
		<label>* Teléfono <span id="adv_m"></span></label>
		<input type="text" name="telefono" id="telefono" />		
		<label>* E-mail <span id="adv_c"></span></label>
		<input type="text" name="correo" id="correo" class="requerido" />
		
		<label>* Fecha</label>
		<input type="text" name="datepicker" id="datepicker">
		
		<label>* Horario</label>
		<select id="horario" name="horario">		
			<option selected value="10">10:00</option>
			<option value="11">11:00</option>
			<option value="12">12:00</option>
			<option value="13">13:00</option>
			<option value="14">14:00</option>
			<option value="15">15:00</option>
			<option value="16">16:00</option>
			<option value="17">17:00</option>
			<option value="18">18:00</option>
		</select>
				
		<input type="submit" value="Enviar" name="submit" id="submit" class="boton"/>
		<div class="clearfix"></div>	
	</form>	
</div>



<div class="clearfix"></div>
</div>
</div>

<?php include('inc/footer.inc'); ?>

</body>
</html>









