	<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
	<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>
	
<style>
	.dashboard .menu li{display:inline-block;width:113px;text-align:center;}
	.dashboard .menu a:hover, .dashboard .menu a.activo{font-weight:bold;}
	.dashboard .menu a {width:100px; text-decoration:none; color:#464646; font-family:'Accidental Presidency;';
	 color: rgba(0,0,0,0.6);
	 text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9,0 5px 0 #aaa,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);
	}
	.paneles{position:relative;}
	.paneles .panel{}
	div.examplefour {
		border: 0;
		height: 1px;
		background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
		background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
		background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
		background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
	}
	
</style>
<script type="text/javascript">
	$(function(){
		$('#menu_mapa').bind('click',function(){
			$('.dashboard .paneles .panel.mapa').fadeIn(0);
			$('.dashboard .paneles .panel.perfil').fadeOut(0);
			$('.dashboard .paneles .panel.password').fadeOut(0);
			
			$('.dashboard .menu a').removeClass('activo');
			$('.dashboard .menu #menu_mapa').addClass('activo');
		});
		
		$('#menu_perfil').bind('click',function(){			
			$('.dashboard .paneles .panel.perfil').fadeIn(0);
			$('.dashboard .paneles .panel.mapa').fadeOut(0);			
			$('.dashboard .paneles .panel.password').fadeOut(0);
			
			$('.dashboard .menu a').removeClass('activo');
			$('.dashboard .menu #menu_perfil').addClass('activo');
		});
		
		$('#menu_password').bind('click',function(){
			
			$('.dashboard .paneles .panel.password').fadeIn(0);
			$('.dashboard .paneles .panel.perfil').fadeOut(0);
			$('.dashboard .paneles .panel.mapa').fadeOut(0);

			$('.dashboard .menu a').removeClass('activo');
			$('.dashboard .menu #menu_password').addClass('activo');			
		});
		
	});
</script>
<div class="dashboard" >
	<div>
		<h2 style="margin-left:20px;">Oficina Virtual</h2>
		 
		<ul class="menu">
			<li><a class="activo" href="#user_header" id="menu_mapa">Mapa</a></li>
			<li><a href="#user_header" id="menu_perfil">Perfil</a></li>
			<li><a href="#user_header" id="menu_password">Contraseña</a></li>
		</ul>
		<div class="examplefour"></div>
	</div>
	<div class="paneles">
		<div style="display:visible;" class="panel mapa"><?php  include('../portal/vistas/oficina/mapa.php'); ?></div>
		<div style="display:none;" class="panel perfil"><?php  include('../portal/vistas/oficina/perfil.php'); ?></div>
		<div style="display:none;" class="panel password"><?php  include('../portal/vistas/oficina/password.php'); ?></div>		
	</div>
</div>