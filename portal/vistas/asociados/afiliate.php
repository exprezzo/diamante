<?php 
	unset( $_SESSION['NuevoSocioID'] );  //esta variable se usa en el proceso de registro, contendra el ID del nuevo socio
?>
<style>
	
	.afiliate{text-align:center; color:#464646;}
	img{border:none;}
	.datos label{}
	.boton_buscar{background-image: url(<?php echo $MOD_WEB_PATH; ?>imagenes/btn_buscar.png);width: 90px;height: 29px;background-repeat: no-repeat;display: inline-block;position: absolute; margin-top:-4px; margin-left:10px; }
	.boton_buscar:hover{background-image: url(<?php echo $MOD_WEB_PATH; ?>imagenes/btn_buscar_hover.png); cursor:pointer;}
	
	.datos_del_anfitrion .etiqueta{ font-size:18px; width:68px; display:inline-block;}
	.datos_del_anfitrion .info{font-family:'Accidental Presidency'; font-size:28px;}
</style>
<!--[if IE]>
<style>
	.slider{height:253px;}
	.sombra_banner{margin-top:-3px; position:relative; }
	img{border:none;}
	.header div{  line-height:73px; }
	.caja_datos input{width: 202px;}
</style>
<![endif]-->
<script src="<?php echo $MOD_WEB_PATH; ?>js/paginas/afiliate.js"></script>







<script type="text/javascript">	
	$(document).ready(function(){			
		
		Afiliate.init();
	});
</script>

<div class="afiliate">
	<h2>AFILIATE</h2>	
	<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />
	<div class="pasos_afiliacion">
		<div class="paso1" style="position:absolute;display:visible;">
			<form id="form_buscar_socio">
			<div class="caja_datos" style="text-align: left;margin-left: 168px;margin-top:20px; ">		
				<label style="text-align:left; display:block; width:auto;position:relative;right:auto;margin-bottom:8px;">Ingresa la clave del Socio que te invitó</label>
				<input type="text" name="asociado_id"/> 		
				<div class="boton_buscar" ></div>
				<div class="error" style='color:red;font-family:"Accidental Presidency", sans-serif;margin-top:8px;'></div>
			</div>
			</form>	
		</div>
		<div class="paso2" style="position:absolute;display:none;">
			<div class="datos_del_anfitrion" style="text-align:left;margin-left: 168px;">
				<div >
					<label class="etiqueta">Clave:</label>
					<label class="info" name="clave">3345</label>		
				</div>
				<div style="margin-bottom:20px;">
					<label class="etiqueta">Nombre:</label>
					<label class="info" name="nombre">EL nombre del Socio:</label>
				</div>
				<div style="display:inline-block;  vertical-align: middle;">
						<br>
						<label>¿Esta persona fue quien te invito?</label>
						<br><br>			
				</div>
				<div style="display:inline-block; ">
					<button class="btn_si" type="button">SI</button>
					<button class="btn_no" type="button">NO</button>
				</div>		
			</div>
		</div>
		<div class="paso3" style="position:absolute;display:none; margin-left:26px; ">
			<?php include '../portal/vistas/asociados/afiliacion/datos_registro.php'; ?>
		</div>
		<div class="paso4" style="position:absolute;display:none; margin-left:185px; ">
			<?php include '../portal/vistas/asociados/afiliacion/password.php'; ?>
		</div>
		<div class="paso5" style="position:absolute;display:none; margin-left:185px; ">
			<?php include '../portal/vistas/asociados/afiliacion/recarga.php'; ?>
		</div>
		<div class="paso6" style="position:absolute;display:none; margin-left:185px; ">
			<?php include '../portal/vistas/asociados/afiliacion/despedida.php'; ?>
		</div>
	</div>
</div>