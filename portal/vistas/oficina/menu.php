<div class="menu_box">
	<div class="menu_items">
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/mapa#user_header">
				<div class="menu_header">
					<div>MAPA DE SOCIOS</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<?php
				if ( !empty($_SESSION['AuthInfo']) && !empty($_SESSION['AuthInfo']['IsLoged']) ){
					$link='user_header';
				}else{
					$link='contenido';
				}
			?>
			<a href="<?php echo $APP_PATH; ?>oficina/pedidos#user_header">
				<div class="menu_header">
					<div>PEDIDOS</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">ADMINISTRA TUS ASOCIADOS | CONTRASEÑA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/descargables#user_header">
				<div class="menu_header">
					<div>DESCARGABLES</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/estado#user_header">
				<div class="menu_header">
					<div>ESTADO DE CUENTA</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/datos#user_header">
				<div class="menu_header">
					<div>CAMBIAR DATOS</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/comisiones#user_header">
				<div class="menu_header">
					<div>REPORTE DE COMISIONES</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>oficina/salir#contenido">
				<div class="menu_header">
					<div>CERRAR SESION</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
	</div>
</div>