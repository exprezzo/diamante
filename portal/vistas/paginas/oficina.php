<script type="text/javascript">
	$(document).ready(function(){				
		$("#login_oficina input").wijtextbox();
		$("#login_oficina button").button();
	});
</script>

<h2 style="margin-left:20px;">Oficina Virtual</h2>		

<form id="login_oficina" style="width=633px; text-align:center; ">
	<div class="" style="margin-top:200px;">
		<h2>Login</h2>		
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
		<div class="caja_datos">
			<label>Codigo Socio:</label><input type="text" name="pass" />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Contrase�a:</label><input type="password" name="retype" /> 
			<div class="error retype" ></div>			
		</div>
		<button >Entrar</button>
	</div>
</form>
