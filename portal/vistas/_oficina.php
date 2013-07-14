<!DOCTYPE html>
<html>
<head>
	<!--meta http-equiv="X-UA-Compatible" content="IE=8"/-->
	
	
	
	<script src="<?php echo $APP_PATH; ?>web/libs/jquery-1.8.3.js" ></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" ></script>	
	<link type="text/css"rel="StyleSheet" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css" />	
	
	<!--Wijmo Widgets JavaScript-->	
	<script src="http://cdn.wijmo.com/jquery.wijmo-open.all.3.20131.1.min.js" type="text/javascript"></script>


	<!--Theme
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/themes/black-tie/jquery-ui.css" rel="stylesheet" type="text/css" />		-->
	<link href="http://cdn.wijmo.com/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" />		
	
	<!--Wijmo Widgets CSS-->
	<link href="http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20131.1.min.css" rel="stylesheet" type="text/css" />

	
	<script type="text/javascript" src="<?php echo $APP_PATH; ?>web/libs/coin-slider/coin-slider.min.js"></script>
	<link rel="stylesheet" href="<?php echo $APP_PATH; ?>web/libs/coin-slider/coin-slider-styles.css" type="text/css" />
	
	
	<link type="text/css"rel="StyleSheet" href="<?php echo $MOD_WEB_PATH; ?>css/estilos.css" />
	<link type="text/css"rel="StyleSheet" href="<?php echo $MOD_WEB_PATH; ?>css/estilos_oficina.css" />
	<!--[if IE]>
	<style>
		.slider{height:253px;}
		.sombra_banner{margin-top:-3px; position:relative; }
		img{border:none;}
		.header div{  line-height:73px; }
    </style>
	<![endif]-->

	<!--[if IE 9]>
		<style>
			.slider{height:253px;}
			.sombra_banner{margin-top:-4px;}
		</style>
	<![endif]-->

	<!--[if IE 7]>
		<style>
			.slider{height:253px;}
			.sombra_banner{margin-top:0px;}
		</style>
	<![endif]-->
	

	<script>
		var Portal={
			base:'<?php echo $APP_PATH; ?>'
		}
	</script>
	<style>
		#user_header{
			background-image: url(<?php echo $APP_PATH; ?>web/portal/imagenes/cintillo.jpg);
			background-repeat:no-repeat; color:white; min-height:50px; position:relative;
			background-size:979px 50px;
		}
		#user_header .user_name{
			font-size:25px; font-family:'Accidental Presidency'; display:inline-block;
			line-height:50px;margin:0; padding:0; vertical-align:middle; text-align:center;
		}
	</style>
</head>
<body>
	<div class="portal">
		<?php $this->mostrar('/paginas/header'); ?>
			<?php
			
			if ( !empty($_SESSION['AuthInfo']) && !empty($_SESSION['AuthInfo']["IsLoged"]) 
				// &&  $_PETICION->controlador=='oficina' && ($_PETICION->accion=='entrar' || $_PETICION->accion=='dashboard')
			)
			{
			?>
			<div id="user_header" style="" >
				
				<div style="text-align:center;position:absolute;width:939px;">
					<h1 class="user_name" style="margin-right:30px;">Bienvenido!</h1><h1 class="user_name" style=""><?php echo utf8_decode($_SESSION['AuthInfo']['UserInfo']['Nombres']).' '.utf8_decode($_SESSION['AuthInfo']['UserInfo']['Apellidos']); ?></h1><h1 class="user_name" style="margin-left:30px;"><?php echo ' #'.$_SESSION['AuthInfo']['UserInfo']['SocioID']; ?></h1>
				</div>
				
				
			</div>
			<?php
			} 
			?>			
		
		<div>
				<?php 
				if ( !empty($_SESSION['AuthInfo']) && !empty($_SESSION['AuthInfo']["IsLoged"]) ){
					$this->mostrar('/oficina/menu'); 
				}else{
					$this->mostrar('/paginas/menu'); 
				}
				?>
				<div id="contenido" class="contenido"><?php $this->mostrar(); ?></div>
		</div>
		<?php $this->mostrar('/paginas/footer'); ?>
	</div>
</body>
<body>
