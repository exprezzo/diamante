
<form id="datos_registro" >
	<input  type="hidden" name="InvitadoPor_SocioId"   />
	<div>Invitado por: <div class="anfitrion" style="display:inline-block;"></div></div>
	<div class="datos">
		<h2>DATOS PERSONALES</h2>
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />						
		<div class="caja_datos">
			<label>NOMBRES</label><input type="text" name="Nombres" />
		</div>
		<div class="caja_datos">
			<label>APELLIDOS</label><input type="text" name="Apellidos" /> 
		</div>
		<div class="caja_datos">
			<label>FECHA DE NACIMIENTO</label><input type="text" name="FechaNac"/> 
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
		<h2>TELEFONO PARA APLICAR RECARGAS</h2>
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" /> <br /> 
		<div class="caja_datos" style="display:inline-block;">
			<label style="right:0; position:relative; width:auto; margin-right:10px;">TELEFONO CELULAR</label><input type="text" name="Celular" />
		</div>
		<div class="caja_datos" style="display:inline-block;">
			<label style="right:0; position:relative; width:auto; margin-right:10px; ">COMPAÑIA</label><input type="text" name="CompaniaId" />
		</div>
	</div>
	<h2>COTITULAR</h2>
	<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />
	<div class="caja_datos" >
		<label>NOMBRES / APELLIDOS</label><input type="text" name="CotitularNombre"  />
	</div>
	<div class="caja_datos" >
		<label>FECHA DE NACIMIENTO</label><input type="text" name="CotitularFechaNac"   />
	</div>
	<button type="button" class="btn_guardar">GUARDAR</button>
</form>
	
				
	