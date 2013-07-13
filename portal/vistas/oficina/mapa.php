<script type="text/javascript">
	$(function(){
		 // $("#tree").wijtree();
		 // $("#tree").wijtreenode({expanded: false});
	});
</script>
<style>
	#mapa{width: 634px;height: 653px;overflow: scroll;}
	#mapa li{font-decoration:none; display:block; margin:17px; cursor:pointer;}
	#mapa li span{
		border:2px #8298bb solid;
		border-radius:5px;
		padding:2px 10px 2px 10px;		
		-webkit-box-shadow: 7px 7px 5px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    7px 7px 5px rgba(50, 50, 50, 0.75);
box-shadow:         7px 7px 5px rgba(50, 50, 50, 0.75);
	}
	#mapa li.primero > span{background-color:white;}
</style>
<div id="mapa">
	<h2 style="text-align:center; width:634px;">Mapa de Invitados</h2>
	
	 <!-- Begin demo markup -->
	<div> 
		<?php
		if ( !empty($this->mapa) ){
		?>
		<ul id="tree"> 
			<?php
			$texto='#'.$_SESSION['AuthInfo']['UserInfo']['SocioID'].'</strong> '.$_SESSION['AuthInfo']['UserInfo']['Nombres'].' '.$_SESSION['AuthInfo']['UserInfo']['Apellidos'];
			echo '<li class="primero"><span><strong>'.utf8_decode($texto).'</span><ul>';
			?>
			<?php
				foreach($this->mapa as $socio){
					$texto='#'.$socio['SocioID'].'</strong> '.$socio['Nombres'].' '.$socio['Apellidos'];
					echo '<li><span><strong>'.utf8_decode($texto).'</span>';
					if (!empty($socio['invitados'])) imprimirInvitados($socio);
					echo '</li>';
				}
			?>
			</ul></li>
		</ul>
		<?php } else {
			echo '<div style="text-align:center; margin-top:10px; ">Usted no tiene invitados.</div>';
		} ?>
	</div> 
	<!-- End demo markup -->
</div>
<?php
	function imprimirInvitados($socio){
		if (empty($socio) || empty($socio['invitados']) ) return;
		echo '<ul>';
		foreach($socio['invitados'] as $invitado){			
			$texto='#'.$invitado['SocioID'].'</strong> '.$invitado['Nombres'].' '.$invitado['Apellidos'];
			echo '<li><span><strong>'.utf8_decode($texto).'</span>';
			if (!empty($invitado['invitados'])) imprimirInvitados($invitado);
			echo '</li>'; 
		}
		echo '</ul>';
	}
?>
