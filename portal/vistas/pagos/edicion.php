
<script src="<?php echo $MOD_WEB_PATH; ?>js/catalogos/<?php echo $_PETICION->controlador; ?>/edicion.js"></script>

<script>			
	$( function(){		
		var config={
			tab:{
				id:'<?php echo $_REQUEST['tabId']; ?>'
			},
			controlador:{
				nombre:'<?php echo $_PETICION->controlador; ?>'
			},
			modulo:{
				nombre:'<?php echo $_PETICION->modulo; ?>'
			},
			catalogo:{
				nombre:'Pagos',
				modelo:'Pago'
			},			
			pk:"PagosId"
			
		};				
		 var editor=new Edicionpagos();
		 editor.init(config);		
	});
</script>

	<div class="pnlIzq">
		<div style="" class="cerrar_tab"></div>
		<?php 	
			global $_PETICION;
			$this->mostrar('/backend/componentes/toolbar');	
			if (!isset($this->datos)){		
				$this->datos=array();		
			}
		?>
		
		<form class="frmEdicion" style="padding-top:10px;">				
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Pagosid:</label>
	<input type="text" name="PagosId" class="txt_PagosId" value="<?php echo $this->datos['PagosId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Fecha:</label>
	<input type="text" name="Fecha" class="txt_Fecha" value="<?php echo $this->datos['Fecha']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Importe:</label>
	<input type="text" name="Importe" class="txt_Importe" value="<?php echo $this->datos['Importe']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Cuentaid:</label>
	<input type="text" name="CuentaId" class="txt_CuentaId" value="<?php echo $this->datos['CuentaId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Aplicadopor_usuarioid:</label>
	<input type="text" name="AplicadoPor_usuarioid" class="txt_AplicadoPor_usuarioid" value="<?php echo $this->datos['AplicadoPor_usuarioid']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Recargaid:</label>
	<input type="text" name="RecargaId" class="txt_RecargaId" value="<?php echo $this->datos['RecargaId']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
