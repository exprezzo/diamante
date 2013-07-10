
var Afiliate={
	configPaso1:function(){
		var me=this;
		$('.contenido .afiliate .boton_buscar').bind('click',this.buscarAsociado);
		
		$('.contenido .afiliate [name="asociado_id"]').bind('keypress',function(){
			$('#form_buscar_socio .error').html('');
		});
		
		$('#form_buscar_socio').submit(function() {
			// e.preventDefault();
			me.buscarAsociado();
			return false;
		});
	},
	configPaso2:function(){
		var me=this;
		$('.contenido .afiliate .btn_no').bind('click',function(){
			me.socio = {};
			$('.contenido .afiliate .paso2').fadeOut();
			$('.contenido .afiliate .paso1').fadeIn();				
			$('#form_buscar_socio [name="asociado_id"]').select();
		});
		
		$('.contenido .afiliate .btn_si').bind('click',function(){
			$('#datos_registro [name="InvitadoPor_SocioId"]').val(me.socio.clave);
			$('#datos_registro .anfitrion').html(me.socio.clave + ' ' + me.socio.nombre);
			
			
			$('.contenido .afiliate .paso2').fadeOut();
			$('.contenido .afiliate .paso3').fadeIn();			
		});
	},
	configPaso3:function(){
		var me=this;
		$('#datos_registro .btn_guardar').bind('click', function(){
			me.registrar();
		});
	},
	configPaso4:function(){
		var me=this;
		$('#form_password .btn_guardar').bind('click', function(){
			var pass1 = $('#form_password [name="pass"]').val();
			var pass2 = $('#form_password [name="retype"]').val();
			
			if (pass1 == ""){
				$('#form_password .error').html('debe escribir una contraseña');
				return false;
			}
			
			if (pass2 == ""){
				$('#form_password .error').html('debe confirmar la contraseña');
				return false;
			}
			
			if (pass1 != pass2 ){
				$('#form_password .error').html('las contraseñas no coinciden');
				return false;
			}
			
			me.setPassword();
		});
		
		$('#form_password input').bind('keyup',function(){
			$('#form_password .error').html('');
		});
		
		$('#form_password [name="retype"]').bind('keyup',function(){
			var pass1 = $('#form_password [name="pass"]').val();
			var pass2 = $('#form_password [name="retype"]').val();
			
			if (pass2 != '' && pass1 != pass2 ){
				$('#form_password .error').html('las contraseñas no coinciden');
			}else{
				$('#form_password .error').html('');
			}			
		});
	},
	configPaso5:function(){
		var me=this;
		$('#form_recarga .btn_guardar').bind('click', function(){
			me.setRecarga();
		});
	},
	init:function(){		
		var me=this;
		this.configPaso1();
		this.configPaso2();
		this.configPaso3();
		this.configPaso4();
		this.configPaso5();
	},
	setRecarga:function(){
		var values = {};
		$.each($('#form_recarga').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});			
		$.ajax({
			type: "POST",
			data:{datos:values},
			url:Portal.base+'recargas/guardar'			
		}).done(function( response ) {
			var resp = eval('(' + response + ')');			
			if ( resp.success ){				   
				  $('.contenido .afiliate .paso6').fadeIn();				   
				  $('.contenido .afiliate .paso5').fadeOut();				  
			}else{				
				$('#form_recarga .error').html(resp.msg);
			}			
		});
	},
	registrar:function(){
		var values = {};
		$.each($('#datos_registro').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});		
		$.ajax({
			type: "POST",
			data:{datos:values},
			url:Portal.base+'asociados/guardar'			
		}).done(function( response ) {
			var resp = eval('(' + response + ')');			
			if (resp.success){				   
				  $('.paso4 .numero_socio').html(resp.datos.SocioID);				  
				  $('.contenido .afiliate .paso4').fadeIn();				   
				  $('.contenido .afiliate .paso3').fadeOut();				  
			}else{				
				// $('#form_buscar_socio .error').html(resp.msg);
			}			
		});
		
	},
	setPassword:function(){
		var values = {};
		$.each($('#form_password').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});			
		$.ajax({
			type: "POST",
			data:{datos:values},
			url:Portal.base+'asociados/setpassword'			
		}).done(function( response ) {
			var resp = eval('(' + response + ')');			
			if ( resp.success ){				   
				  $('.contenido .afiliate .paso5').fadeIn();				   
				  $('.contenido .afiliate .paso4').fadeOut();				  
			}else{				
				$('#form_password .error').html(resp.msg);
			}			
		});
		
	},
	buscarAsociado:function(){
		
		var asociadoId  = $('.contenido .afiliate [name="asociado_id"]').val();
		if (asociadoId==""){			
			$('#form_buscar_socio .error').html('Debe escribir el numero de asociado');
			return false;
		}		
		var datos={asociadoId:asociadoId};
		var me = this;
		$.ajax({
			type: "POST",
			data:datos,
			url:Portal.base+'asociados/buscarAnfitrion'			
		}).done(function( response ) {
			var resp = eval('(' + response + ')');
			// console.log("resp"); console.log(resp);			
			if (resp.success){
				me.socio = {
					clave	:resp.socio.SocioID,
					nombre	:resp.socio.Nombres + ' ' + resp.socio.Apellidos
				};
				
				$('.datos_del_anfitrion [name="clave"]').html(resp.socio.SocioID);
				$('.datos_del_anfitrion [name="nombre"]').html(resp.socio.Nombres + ' ' + resp.socio.Apellidos);			
				$('.contenido .afiliate .paso1').fadeOut();				
				$('.contenido .afiliate .paso2').fadeIn();
			}else{
				
				$('#form_buscar_socio .error').html(resp.msg);
				$('#form_buscar_socio [name="asociado_id"]').select();
				
			}
			
		});
		
	}
}