<div class="menu_box">
	<div class="menu_items">
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>asociados/afiliate#contenido">
				<div class="menu_header">
					<div>AFILIATE</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">Unete a nuestra comunidad!</div>
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
				<div class="menu_descripcion">Estado de Cuenta, Mapa de Red</div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/empresa#contenido">
				<div class="menu_header">
					<div>EMPRESA</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">Conocenos!</div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/preguntas#contenido">
				<div class="menu_header">
					<div>PREGUNTAS FRECUENTES</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">Las respuestas a tus dudas!</div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/plan#contenido">
				<div class="menu_header">
					<div>PLAN DE COMPENSACI&Oacute;N</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">como se calculan las comisiones?</div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/videos#contenido">
				<div class="menu_header">
					<div>VIDEOS</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">Testimonios de nuestros socios!</div>
			</a>
		</div>
		<div class="menu_item">
			<a href="<?php echo $APP_PATH; ?>paginas/contacto#contenido">
				<div class="menu_header">
					<div>CONTACTO</div>
				</div>
				<div class="menu_divisor"></div>
				<div class="menu_descripcion">Necesitas mas informacion?</div>
			</a>
		</div>
	</div>
</div>