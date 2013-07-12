<!DOCTYPE html>
<html>
<head>
	<!--meta http-equiv="X-UA-Compatible" content="IE=8"/-->
	
	
	
	<script src="<?php echo $APP_PATH; ?>web/libs/jquery-1.8.3.js" ></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" ></script>	
	<link type="text/css"rel="StyleSheet" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css" />	
	
	<!--Wijmo Widgets JavaScript-->	
	<script src="http://cdn.wijmo.com/jquery.wijmo-open.all.3.20131.1.min.js" type="text/javascript"></script>
	<script src="http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20131.1.min.js" type="text/javascript"></script>

	
	<!--Theme-->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/themes/black-tie/jquery-ui.css" rel="stylesheet" type="text/css" />		
	<!--Wijmo Widgets CSS-->
	<link href="http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20131.1.min.css" rel="stylesheet" type="text/css" />

	<link type="text/css"rel="StyleSheet" href="<?php echo $MOD_WEB_PATH; ?>css/estilos.css" />
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
	
</head>
<body>
	<div class="portal">
		<?php $this->mostrar('/paginas/header'); ?>
		<div>
				<?php $this->mostrar('/paginas/menu'); ?>
				<div id="contenido" class="contenido"><?php $this->mostrar(); ?></div>
		</div>
		<?php $this->mostrar('/paginas/footer'); ?>
	</div>
</body>
<body>
