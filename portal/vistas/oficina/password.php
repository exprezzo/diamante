
<style>
	#form_password .caja_datos label {right: 433px; }
	#form_password .error{color: red; display: inline-block;margin-left: 13px;position: absolute;margin-top: 6px;}
</style>
<script>
	$(function(){
		$('#form_password input').wijtextbox();
	});
</script>
<form style="text-align:center;margin-top:30px;" id="form_password">
	
	<div class="datos">
		<h2>Contraseña</h2>		
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
		<div class="caja_datos">
			<label>Contraseña</label><input type="password" name="pass" />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Confirmar</label><input type="password" name="retype" /> 
			<div class="error retype" ></div>
			
		</div>
	</div>
	<div class="error general" style="display:block; position:relative; "></div>
	<button type="button" class="btn_guardar">Guardar</button>
</form>