<style>
	
</style>
<form style="text-align:center;margin-top:30px;" id="form_password">
	<div>Su numero de socio es:<div class="numero_socio" style="font-size:35px; font-family:'Accidental Presidency;' ">9510</div></div>	
	<div class="datos">
		<h2>Contrase�a</h2>		
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		
		<div class="caja_datos">
			<label>Contrase�a</label><input type="password" name="pass" />
		</div>
		<div class="caja_datos">
			<label>Confirmar</label><input type="password" name="retype" /> 
		</div>
	</div>
	<div class="error" style="color:red; width: 270px;"></div>
	<button type="button" class="btn_guardar">Guardar</button>
</form>