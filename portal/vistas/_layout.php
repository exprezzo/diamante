<!DOCTYPE html>
<html>
<head>
	<!--meta http-equiv="X-UA-Compatible" content="IE=8"/-->
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
				<div class="contenido"><?php $this->mostrar(); ?></div>
		</div>
		<?php $this->mostrar('/paginas/footer'); ?>
	</div>
</body>
<body>
