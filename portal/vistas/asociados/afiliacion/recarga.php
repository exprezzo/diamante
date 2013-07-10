<style>
	
</style>
<form style="text-align:center;margin-top:30px;" id="form_recarga">
	
	<div class="datos">
		<div>¿Desea realizar una recarga inicial?</div>	
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		
		<div class="caja_datos">
			<label>Monto</label><input type="text" name="Importe" />
		</div>
		<div class="caja_datos">
			<label>Fecha</label><input type="fecha" name="Fecha" /> 
		</div>
	</div>
	<div class="error" style="color:red; width: 270px;"></div>
	<button type="button" class="btn_guardar">Guardar</button>
</form>