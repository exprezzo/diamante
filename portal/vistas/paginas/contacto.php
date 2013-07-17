<script type="text/javascript">
	$(document).ready(function(){				
		$("#contacto input, #contacto textarea").wijtextbox();
		$("#contacto button").button();
	});
</script>



<form id="contacto" style="width:633px; text-align:left; " METHOD="POST">
	<div class="" style="margin-top:40px;">
		<div style="text-align:center;">
			<h2>Contacto</h2>		
			<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
		</div>
		<div class="caja_datos">
			<label>Escriba su nombre:</label><input type="text" name="nombre" />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Escriba su Email:</label><input type="text" name="email" />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Escriba el asunto del mensaje:</label><input type="text" name="asunto" />
			<div class="error password" ></div>
		</div>
		<div class="caja_datos">
			<label>Escriba el mensaje:</label><textarea style="width:496px;height:177px;" name="mensaje"></textarea>
			<div class="error retype" ></div>			
		</div>
		<div style="text-align:center;">
			<button >Enviar</button>
		</div>
	</div>
</form>
