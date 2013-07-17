<script type="text/javascript">
	$(document).ready(function() {
		$('#coin-slider').coinslider({
		width: 330, // width of slider panel
		height: 252// height of slider panel		
		
		});
	});
</script>
<style type="text/css">
#cs-buttons-coin-slider{margin-top: -35px; z-index:2; }
#coin-slider{ z-index:1;}
.cs-buttons a{ border: 3px solid transparent; border-radius: 50%;width: 8px;height: 8px; background-color: #046ca0; display:inline-block; *display: inline; cursor:pointer; }
#cs-prev-coin-slider{z-index:-1}
#cs-next-coin-slider{z-index:-1}
.cs-buttons a{z-index:1}
.cs-buttons a.cs-active{ border: 3px solid white;}
.cs-buttons a:hover{ border: 3px solid #00afef; }

</style>
<div class="header">
	<div class="titulo1">TITULO DE <strong> PRUEBA</strong></div>
	<div class="titulo2">TITULO DE PRUEBA WEB</div>
</div>
<div class="banner_wrap">
	<div class="banner">
		<div class="slider">			
			<div id='coin-slider'>
				<a href="imgN_url">
					<img style="display:none;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/amigas.jpg' > 
					<span></span>
				</a>
				<a href="imgN_url">
					<img style="display:none;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/dinero-pesos.jpg' > 
					<span></span>
				</a>
				<a href="imgN_url">
					<img style="display:none;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/celulares.jpg' > 
					<span></span>
				</a>
				<a href="imgN_url">
					<img style="display:none;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/friends-fingers.jpg' >
					<span></span>
				</a>
				<a href="img01_url" target="_blank">
					<img style="display:none;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/monedas-y-billetes.jpg' >
					<span></span>
				</a>
				
				
				
			</div>
		</div>				
		
		<div class="banner_derecha">
				<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/banner-der.png">
		</div>
	</div>
	<div class="sombra_banner">
	</div>
</div>