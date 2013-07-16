
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
				nombre:'Cuenta',
				modelo:'Cuenta'
			},			
			pk:"CuentaID"
			
		};				
		 var editor=new Edicioncuentas();
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
	<label style="">Cuentaid:</label>
	<input type="text" name="CuentaID" class="txt_CuentaID" value="<?php echo $this->datos['CuentaID']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Nombre:</label>
	<input type="text" name="Nombre" class="txt_Nombre" value="<?php echo $this->datos['Nombre']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Numerocuenta:</label>
	<input type="text" name="NumeroCuenta" class="txt_NumeroCuenta" value="<?php echo $this->datos['NumeroCuenta']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Bancoid:</label>
	<input type="text" name="BancoId" class="txt_BancoId" value="<?php echo $this->datos['BancoId']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
