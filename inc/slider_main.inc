<script type="text/javascript">
		function validacion() {
			v_nombre = document.getElementById('nombre').value;
			if( v_nombre == null || v_nombre.length <= 3 || /^\s+$/.test(v_nombre) ) {
				document.getElementById('adv_n').innerHTML='Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_n').innerHTML='';
			}

			v_mail = document.getElementById('correo').value;
			reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  			if(reg.test(v_mail) == false) {
				document.getElementById('adv_c').innerHTML='Campo obligatorio';
  				return false;
  			} else {
				document.getElementById('adv_c').innerHTML='';
			}

			v_mensaje = document.getElementById('mensaje').value;
			if( v_mensaje == null || v_mensaje.length <= 10 || /^\s+$/.test(v_mensaje) ) {
				document.getElementById('adv_m').innerHTML='Campo obligatorio';
				return false;
			} else {
				document.getElementById('adv_m').innerHTML='';
			}
			
		return true;
		}
	</script>
	
<div class="slider">
	<div class="preloader"></div>
	<div class="images"></div>
	<div class="clearfix"></div>
	
	<div id="form-home">
	<h2>¡Escríbenos!</h2>
	<form id="myformHome" name="myform" action="contacto_h.php" method="POST" onsubmit="return validacion()">
		<label>* Nombre<span id="adv_n"></span></label>
		<input type="text" name="nombre" id="nombre" class="requerido" />
		<label>* E-mail <span id="adv_c"></span></label>
		<input type="text" name="correo" id="correo" class="requerido" />
		<label>* Mensaje  <span id="adv_m"></span></label>
		<textarea id="mensaje" name="mensaje"></textarea>
		<div class="clearfix"></div>
		<input type="submit" value="Enviar" name="submit" id="send"/>	
	</form>	
	</div>
	
	<div class="clearfix"></div>
</div>


