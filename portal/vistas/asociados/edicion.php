
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
				nombre:'Asociados',
				modelo:'Asociado'
			},			
			pk:"SocioID"
			
		};				
		 var editor=new Edicionasociados();
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
	<label style="">Socioid:</label>
	<input type="text" name="SocioID" class="txt_SocioID" value="<?php echo $this->datos['SocioID']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Nombres:</label>
	<input type="text" name="Nombres" class="txt_Nombres" value="<?php echo $this->datos['Nombres']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Apellidos:</label>
	<input type="text" name="Apellidos" class="txt_Apellidos" value="<?php echo $this->datos['Apellidos']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Fechanac:</label>
	<input type="text" name="FechaNac" class="txt_FechaNac" value="<?php echo $this->datos['FechaNac']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Direccion:</label>
	<input type="text" name="Direccion" class="txt_Direccion" value="<?php echo $this->datos['Direccion']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Colonia:</label>
	<input type="text" name="Colonia" class="txt_Colonia" value="<?php echo $this->datos['Colonia']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Ciudad:</label>
	<input type="text" name="Ciudad" class="txt_Ciudad" value="<?php echo $this->datos['Ciudad']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Estadoid:</label>
	<input type="text" name="EstadoId" class="txt_EstadoId" value="<?php echo $this->datos['EstadoId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Codigopostal:</label>
	<input type="text" name="CodigoPostal" class="txt_CodigoPostal" value="<?php echo $this->datos['CodigoPostal']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Celular:</label>
	<input type="text" name="Celular" class="txt_Celular" value="<?php echo $this->datos['Celular']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Companiaid:</label>
	<input type="text" name="CompaniaId" class="txt_CompaniaId" value="<?php echo $this->datos['CompaniaId']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Cotitularnombre:</label>
	<input type="text" name="CotitularNombre" class="txt_CotitularNombre" value="<?php echo $this->datos['CotitularNombre']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Cotitularfechanac:</label>
	<input type="text" name="CotitularFechaNac" class="txt_CotitularFechaNac" value="<?php echo $this->datos['CotitularFechaNac']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Clabe:</label>
	<input type="text" name="CLABE" class="txt_CLABE" value="<?php echo $this->datos['CLABE']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Bancoid:</label>
	<input type="text" name="BancoID" class="txt_BancoID" value="<?php echo $this->datos['BancoID']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Fk_user:</label>
	<input type="text" name="fk_user" class="txt_fk_user" value="<?php echo $this->datos['fk_user']; ?>" style="width:500px;" />
</div>

		</form>
	</div>
</div>
