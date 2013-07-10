
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
				nombre:'Recargas',
				modelo:'Recarga'
			},			
			pk:"RecargaId"
			
		};				
		 var editor=new Edicionrecargas();
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
	<label style="">Recargaid:</label>
	<input type="text" name="RecargaId" class="txt_RecargaId" value="<?php echo $this->datos['RecargaId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Socioid:</label>
	<input type="text" name="SocioID" class="txt_SocioID" value="<?php echo $this->datos['SocioID']; ?>" style="width:500px;" />
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
	<label style="">Depositoid:</label>
	<input type="text" name="DepositoId" class="txt_DepositoId" value="<?php echo $this->datos['DepositoId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Aplicadapor_usuarioid:</label>
	<input type="text" name="AplicadaPor_usuarioid" class="txt_AplicadaPor_usuarioid" value="<?php echo $this->datos['AplicadaPor_usuarioid']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Fechaaplicada:</label>
	<input type="text" name="FechaAplicada" class="txt_FechaAplicada" value="<?php echo $this->datos['FechaAplicada']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
