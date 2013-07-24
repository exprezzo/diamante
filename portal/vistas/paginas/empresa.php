<style>
	.contenido .somos p{ text-align:justify;color:#464646; font-size:18px;}
	.contenido .somos{text-align:center;}
	
.caja-sombra 
{
  position: relative;
  width: 85%;
  background: white;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 2em 1.5em;
  color: rgba(0,0,0, .8);
  text-shadow: 0 1px 0 #fff;
  line-height: 1.5;
  margin: 22px auto;  
  color:#464646;
  font-size:18px; 
  webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;


}

.caja-sombra:before, .caja-sombra:after 
{
  z-index: -1; 
  position: absolute; 
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%; 
  top: 80%;
  max-width:300px;
  background: rgba(0, 0, 0, 0.7); 
  -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);   
  -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  -webkit-transform: rotate(-3deg);    
  -moz-transform: rotate(-3deg);   
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}

.caja-sombra:after 
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
#contenido{
z-index: 1;
position: relative;


}

#contenido{
	height:auto;
}
</style>

<script>
	$(function(){
				
		var h = $('#contenido').height();
		$('.menu_box').height( h -40);
			
		setTimeout(function() {
			var h = $('#contenido').height();
			$('.menu_box').height( h +14);
		}, 2000);

	});
	
</script>

	<div class="somos caja-sombra"> 
		<div style="width:373px;height:205px;border:6px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
			<img style="" src='<?php echo $MOD_WEB_PATH; ?>imagenes/empresa.jpg' >
		</div>
		
		<h2>�QUIENES SOMOS?</h2>	
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />
		<p style=" ">
		Diamond people S.A. de C.V. es una empresa mexicana legalmente constituida que nace ante la 
		necesidad de generar nuevas y mejores  fuentes de  ingresos para las familias mexicanas y sus hogares. <br />
Nuestro Objetivo primordial es y ser� crear un grupo solido de personas en constante crecimiento 
personal y profesional basado en la prosperidad de nuestras vidas y en la buena integraci�n 
familiar mediante la eliminaci�n de escases y carencias. Que por medio del consumo de tiempo 
aire y la creaci�n de una red de consumidores, el afiliado obtenga un ingreso adicional, obtenido 
la posibilidad de recibir regal�as por la generaci�n de la red y que esta fuente de ingresos pueda 
heredarla a sus descendientes  mejorando as� su estilo de vida. <br />
Las recargas telef�nicas aplican para cualquier tipo de compa��a existente en nuestro pa�s.
		</p>
		<div>
			<div style="width:122px;height:65px;border:2px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
				<img style="width:122px;height:65px;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/companias/iusacell.jpg' >
			</div>
			<div style="width:122px;height:65px;border:2px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
				<img style="width:122px;height:65px;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/companias/movistar2.jpg' >
			</div>
			<div style="width:100px;height:65px;border:2px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
				<img style="width:100px;height:65px;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/companias/nextel2.jpg' >
			</div>
			<div style="width:122px;height:65px;border:2px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
				<img style="width:122px;height:65px;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/companias/telcel.jpg' >
			</div>
			<div style="width:122px;height:65px;border:2px solid #464646;background-color:white; display:inline-block;margin:10px auto;"> 
				<img style="width:122px;height:65px;" src='<?php echo $MOD_WEB_PATH; ?>imagenes/companias/unefon.jpg' >
			</div>
			
		</div>
	</div>
