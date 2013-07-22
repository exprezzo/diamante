<script type="text/javascript">
	$(document).ready(function(){				
		$("#login_admin input").wijtextbox();
		$("#login_admin button").button();
	});
</script>

<h2 style="margin-left:20px;">Administración</h2>		

<form action="<?php echo $APP_PATH; ?>admin/entrar#user_header" id="login_admin" style="width=633px; text-align:center;" method="POST">
	<div class="" style="margin-top:200px;">
		<h2>Login</h2>		
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
		<div class="caja_datos">
			<label>Usuario:</label><input type="text" name="user" autofocus />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Contraseña:</label><input type="password" name="pass" /> 
			<div class="error retype" ></div>			
		</div>
		<button >Entrar</button>
	</div>
</form>
