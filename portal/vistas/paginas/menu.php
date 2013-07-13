<div class="menu_box">
	<div class="menu_items">
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>asociados/afiliate#contenido">
				<div class="menu_header">
					<div>AFILIATE</div>
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
			<a href="<?php echo $APP_PATH; ?>oficina/entrar#<?php echo $link ?>">
				<div class="menu_header">
					<div>OFICINA VIRTUAL</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">ADMINISTRA TUS ASOCIADOS | CONTRASEÑA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/empresa#contenido">
				<div class="menu_header">
					<div>EMPRESA</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/preguntas#contenido">
				<div class="menu_header">
					<div>PREGUNTAS FRECUENTES</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/plan#contenido">
				<div class="menu_header">
					<div>PLAN DE COMPENSACI&Oacute;N</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/videos#contenido">
				<div class="menu_header">
					<div>VIDEOS</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/contacto#contenido">
				<div class="menu_header">
					<div>CONTACTO</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">DESC. CORTA | DESC. CORTA | DESC. CORTA </div>
			</a>
		</div>
	</div>
</div>