
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
				nombre:'Comisiones',
				modelo:'Comision'
			},			
			pk:"ComisionId"
			
		};				
		 var editor=new Edicioncomisiones();
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
	<label style="">Comisionid:</label>
	<input type="text" name="ComisionId" class="txt_ComisionId" value="<?php echo $this->datos['ComisionId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Socioid:</label>
	<input type="text" name="SocioId" class="txt_SocioId" value="<?php echo $this->datos['SocioId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Recargaid:</label>
	<input type="text" name="RecargaId" class="txt_RecargaId" value="<?php echo $this->datos['RecargaId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Importe:</label>
	<input type="text" name="Importe" class="txt_Importe" value="<?php echo $this->datos['Importe']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Fechagenerada:</label>
	<input type="text" name="FechaGenerada" class="txt_FechaGenerada" value="<?php echo $this->datos['FechaGenerada']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Pagoid:</label>
	<input type="text" name="PagoId" class="txt_PagoId" value="<?php echo $this->datos['PagoId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Nivelid:</label>
	<input type="text" name="NivelId" class="txt_NivelId" value="<?php echo $this->datos['NivelId']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
