<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<style>
	
</style>
<script>
	$(function(){
		 // $('#form_recarga input').wijtextbox();		
		$("#form_recarga [name='Importe']").wijinputnumber({ type: 'currency', showGroup: true});
		$("#form_recarga [name='Fecha']").wijinputdate({showTrigger: true  });
		$("#form_recarga button").button();
	});
</script>
<form style="text-align:center;margin-top:30px;" id="form_recarga" METHOD="POST" action="<?php echo $APP_PATH; ?>oficina/pedidos#user_header">
	
	<div class="datos">
		<h2 style="text-align:center; width:634px;">Pedidos</h2>
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		
		<div class="caja_datos">
			<label>Monto</label><input type="text" name="Importe" />
		</div>
		<div class="caja_datos">
			<label>Fecha</label><input type="text" name="Fecha" /> 
		</div>
	</div>
	<div class="error" style="color:red; width: 270px;"></div>
	<button type="submit" class="btn_guardar">Submit</button>
</form>