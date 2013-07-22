
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
				nombre:'Depositos',
				modelo:'Deposito'
			},			
			pk:"DepositoId"
			
		};				
		 var editor=new Ediciondepositos();
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
	<label style="">Depositoid:</label>
	<input type="text" name="DepositoId" class="txt_DepositoId" value="<?php echo $this->datos['DepositoId']; ?>" style="width:500px;" />
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
	<label style="">Fechadeposito:</label>
	<input type="text" name="FechaDeposito" class="txt_FechaDeposito" value="<?php echo $this->datos['FechaDeposito']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Cuentaid:</label>
	<input type="text" name="CuentaId" class="txt_CuentaId" value="<?php echo $this->datos['CuentaId']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
