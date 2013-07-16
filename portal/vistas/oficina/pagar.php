<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<style>
	
</style>
<script>
	$(function(){
		 // $('#form_recarga input').wijtextbox();		
		$("#form_pagar [name='Importe']").wijinputnumber({ type: 'currency', showGroup: true});
		$("#form_pagar [name='Fecha']").wijinputdate({showTrigger: true  });
		$("#form_pagar [name='Cuentaid']").wijcombobox();
		$("#form_pagar button").button();
	});
</script>
<style>
	
</style>
<form style="text-align:center;margin-top:30px;" id="form_pagar" METHOD="POST" action="<?php echo $APP_PATH; ?>oficina/pagar#user_header">	
	<div class="datos">
		<h2 style="text-align:center; width:634px;">Pagar Recarga</h2>
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		
		<input type="hidden" name="RecargaId" value="<?php echo $this->recarga['RecargaId']; ?>" /> 
		
		<div class="caja_datos">
			<label>Importe</label><input type="text" name="Importe" value="<?php echo $this->recarga['Importe']; ?>" />
		</div>
		<div class="caja_datos">
			<label>Fecha</label><input type="text" name="Fecha" value="<?php echo $this->recarga['Fecha']; ?>" /> 
		</div>
		<div class="caja_datos">
			<label>Cuenta</label>
			<select name="Cuentaid" style="width:142px;">
				<?php 
				foreach($this->cuentas['datos'] as $cuenta){
					echo '<option value="'.$cuenta['CuentaID'].'">'.$cuenta['Nombre'].'</option>';
				}
				?>
			</select>
			
			
		</div>
	</div>
	<div class="error" style="color:red; width: 270px;"></div>
	<button type="submit" class="btn_guardar">Submit</button>
</form>
