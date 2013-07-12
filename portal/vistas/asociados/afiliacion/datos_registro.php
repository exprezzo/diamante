<style>
	#datos_registro .caja_datos label{position:relative; right:0; margin-right: 10px; }
	#datos_registro .error{color:red;display:inline-block;margin-left: 13px;}
</style>

<div style="margin-top:10px;">Invitado por: <div class="anfitrion" style="display:inline-block;"></div></div>
<form id="datos_registro" >
	<input  type="hidden" name="InvitadoPor_SocioId"   />
	
	<div class="datos" style="text-align:left;">
		<div style="text-align:center;">
			<h2>DATOS PERSONALES</h2>
			<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		</div>
		<div class="caja_datos">
			<label>NOMBRES</label><input type="text" name="Nombres" /><div class="error Nombres"></div>
		</div>
		<div class="caja_datos">
			<label>APELLIDOS</label><input type="text" name="Apellidos" /> <div class="error Apellidos"></div>
		</div>
		<div class="caja_datos">
			<label>FECHA DE NACIMIENTO</label><input type="text" name="FechaNac"/> <div class="error FechaNac"></div>
		</div>
		<div class="caja_datos">
			<label>DIRECCION</label><input type="text" name="Direccion" />
		</div>
		<div class="caja_datos">
			<label>COLONIA</label><input type="text" name="Colonia" />
		</div>
		<div class="caja_datos">
			<label>CIUDAD</label><input type="text" name="Ciudad" />
		</div>
		<div class="caja_datos">
			<label>ESTADO</label><input type="text" name="EstadoId" />
		</div>
		<div class="caja_datos">
			<label>CODIGO POSTAL</label><input type="text" name="CodigoPostal" />
		</div>
		<div style="text-align:center;">
			<h2>TELEFONO PARA APLICAR RECARGAS</h2>
			<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" /> <br /> 
		</div>
		<div style="margin-left:45px;">
			<div class="caja_datos" style="display:inline-block;">
				<label style="right:0; position:relative; width:auto; margin-right:10px;">TELEFONO CELULAR</label><input style="width:128px;" stytype="text" name="Celular" />
				<div class="error Celular" style="display: inline-block;position: absolute;"></div>
			</div>
			<div class="caja_datos" style="display:inline-block;">
				<label style="right:0; position:relative; width:auto; margin-right:10px; ">COMPAÑIA</label>
				<select style="width:128px;" type="text" name="CompaniaId">
					<?php foreach($this->companias as $comp) 
						echo '<option value="'.$comp['clave'].'">'.$comp['descripcion'].'</option>'
					?>
				</select>				
				<div class="error CompaniaId" style="display: inline-block;position: absolute;"></div>
			</div>
		</div>
	</div>
	<h2>COTITULAR</h2>
	<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />
	<div style="text-align:left;">
		<div class="caja_datos" >
			<label>NOMBRES / APELLIDOS</label><input type="text" name="CotitularNombre"  />
		</div>
		<div class="caja_datos" >
			<label>FECHA DE NACIMIENTO</label><input type="text" name="CotitularFechaNac"   />
		</div>
	</div>
	<button type="button" class="btn_guardar">GUARDAR</button>
</form>
	
				
	