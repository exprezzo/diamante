<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<style>
	
</style>
<script>
	$(function(){		 
		// $("#form_aplicar [name='Importe']").wijinputnumber({ type: 'currency', showGroup: true});
		$("#form_aplicar [name='foliosistema']").wijtextbox();
		// $("#form_aplicar [name='Fecha']").wijinputdate({showTrigger: true  });
		// $("#form_aplicar [name='Cuentaid']").wijcombobox();
		$("#form_aplicar button").button();
	});
</script>
<style>
	
</style>
<form style="text-align:center;margin-top:30px;" id="form_aplicar" METHOD="POST" action="<?php echo $APP_PATH; ?>recargas/aplicar#user_header">	
	<div class="datos">
		<h2 style="text-align:center; width:634px;">Aplicar Recarga</h2>
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		
		<input type="hidden" name="RecargaId" value="<?php echo $this->recarga['RecargaId']; ?>" /> 
		
		<div class="caja_datos">
			<label>Folio</label><input type="text" name="foliosistema" value="" />
		</div>
		
	</div>
	<div class="error" style="color:red; width: 270px;"></div>
	<button type="submit" class="btn_guardar">Submit</button>
</form>
