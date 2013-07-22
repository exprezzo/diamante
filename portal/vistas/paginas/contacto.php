<script type="text/javascript">
	$(document).ready(function(){				
		$("#contacto input, #contacto textarea").wijtextbox();
		$("#contacto button").button();
	});
</script>


<style type="text/css">

.shadow {
	position: relative;
	max-width: 270px;
	box-shadow: 0px 1px 4px rgba(0,0,0,0.3),
				0px 0px 20px rgba(0,0,0,0.1) inset;
}

.shadow::before,
.shadow::after {
   content:"";
   position:absolute;
   z-index:-1;
}

.shadow::before,
.shadow::after {
   content:"";
   position:absolute;
   z-index:-1;
   bottom:15px;
   left:10px;
   width:50%;
   height:20%;
}

.shadow::before,
.shadow::after {
   content:"";
   position:absolute;
   z-index:-1;
   bottom:15px;
   left:10px;
   width:50%;
   height:20%;
   box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);
   transform:rotate(-3deg);
}

.shadow::after{
   right:10px;
   left:auto;
   transform:rotate(3deg);
 }
</style>
<div id="contacto" style="width:633px; text-align:left; ">
	<div class="" style="margin-top:20px;">
		<div style="text-align:center;">
			<h2>Contacto</h2>		
			<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
		</div>
		<div style="text-align:center;margin-top:20px;">
			<div class="shadow" style="color:#464646; text-align: left; display: inline-block;padding: 22px;border-radius: 5px;font-family: 'Accidental Presidency';font-size: 18px;">
				<div>Manuel Apellido Apellido</div>
				<div>Correo: manuel@diamondpeople.com.mx</div>
				<div>Celular: 669 999999</div>
			</div>
		</div>
	</div>
</div>
