
var Afiliate={
	configPaso1:function(){
		var me=this;
		
		 $(".contenido .afiliate .boton_buscar").button(); 
		
		// $('.contenido .afiliate .boton_buscar').bind('click',this.buscarAsociado);
		
		 $('.contenido .afiliate [name="asociado_id"]').wijtextbox(); 		 
		 
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
				
		$( ".contenido .afiliate .btn_si" )
		  .button()
		  .click(function( event ) {
				$('.afiliate h2.titulo').fadeOut();				
				$('.afiliate img.imagen_titulo').fadeOut();				
		
				$('.contenido .afiliate .paso2').fadeOut();				
				$('.contenido .afiliate .paso3').fadeIn();	
				$('#datos_registro [name="InvitadoPor_SocioId"]').val(Afiliate.socio.clave);
				$('.paso3 .anfitrion').html(Afiliate.socio.clave + ' ' + Afiliate.socio.nombre);				
				$('#datos_registro  [name="CompaniaId"]').wijcombobox('repaint');
				
		  });
		  
		 $( ".contenido .afiliate .btn_no" )
		  .button()
		  .click(function( event ) {
				Afiliate.socio = {};
				$('.contenido .afiliate .paso2').fadeOut();
				$('.contenido .afiliate .paso1').fadeIn();				
				$('#form_buscar_socio [name="asociado_id"]').select();
		  });
	},
	configPaso3:function(){
		var me=this;		
		
		$('#datos_registro input').wijtextbox(); 		 
		
		 $("#datos_registro [name='FechaNac'], #datos_registro [name='CotitularFechaNac']").wijinputdate({
            showNullText: true, 
            nullText:'seleccione',    
            dateFormat: 'yyyy/M/d',
            /* comboItems: [
                { label: '1980/4/8', value: new Date(1980, 3, 8) },
                { label: '2007/12/25', value: new Date(2007, 11, 25) },
                { label: 'today', value: new Date()}
            ], */
            showTrigger: true
        });
    
		
		 $('#datos_registro  [name="CompaniaId"]').wijcombobox( );
		 
		$( "#datos_registro .btn_guardar" )
		  .button()
		  .click(function( event ) {
				me.registrar();
		  });
		  
		 $("#datos_registro [name='Nombres']").bind('keypress',function(){
			$("#datos_registro .error.Nombres").html('');
		});
		$("#datos_registro [name='Apellidos']").bind('keypress',function(){
			$("#datos_registro .error.Apellidos").html('');
		});
		$("#datos_registro [name='Celular']").bind('keypress',function(){
			$("#datos_registro .error.Celular").html('');
		});
		$("#datos_registro [name='CompaniaId']").wijcombobox({selectedIndexChanged: function(e, data) { 		
			$("#datos_registro .error.CompaniaId").html('');
		}});
		
		$("#datos_registro [name='FechaNac']").wijinputdate({dateChanged: function(e, arg){
			$("#datos_registro .error.FechaNac").html('');
		}});
		
		$("#datos_registro [name='CotitularFechaNac']").wijinputdate({dateChanged: function(e, arg){
			$("#datos_registro .error.CotitularFechaNac").html('');
		}});
		 
		  
	},
	configPaso4:function(){
		var me=this;
		
		$('#form_password input').wijtextbox(); 		 
		
		$('#form_password button').button(); 		 
		
		$('#form_password .btn_guardar').bind('click', function(){
			var pass1 = $('#form_password [name="pass"]').val();
			var pass2 = $('#form_password [name="retype"]').val();
			
			if (pass1 == ""){
				$('#form_password .error.password').html('debe escribir una contraseña');
				return false;
			}
			
			if (pass2 == ""){
				$('#form_password .error.retype').html('debe confirmar la contraseña');
				return false;
			}
			
			if (pass1 != pass2 ){
				$('#form_password .error.password, #form_password .error.retype').html('*');				
				$('#form_password .error.general').html('las contraseñas no coinciden');
				return false;
			}
			
			me.setPassword();
		});
		
		$('#form_password [name="pass"]').bind('keyup',function(){
			$('#form_password .error.password').html('');
			$('#form_password .error.general').html('');
		});
		
		$('#form_password [name="retype"]').bind('keyup',function(){
			$('#form_password .error.retype').html('');
			$('#form_password .error.general').html('');
		});
		
		$('#form_password [name="retype"]').bind('keyup',function(){
			var pass1 = $('#form_password [name="pass"]').val();
			var pass2 = $('#form_password [name="retype"]').val();
			
			if (pass2 != '' && pass1 != pass2 ){
				$('#form_password .error.password, #form_password .error.retype').html('*');
				$('#form_password .error.general').html('las contraseñas no coinciden');
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
	
	
	validarDatosRegistro:function(){
		var errores=0;
		
		
		var nombres= $("#datos_registro [name='Nombres']").val();
		if (nombres==""){
			$("#datos_registro .error.Nombres").html('Escriba su Nombre');
			// $("#datos_registro [name='Nombres']").addClass('ui-state-error');
			errores++;
		}
		
		var apellidos= $("#datos_registro [name='Apellidos']").val();
		if (apellidos==""){
			$("#datos_registro .error.Apellidos").html('Escriba sus Apellidos');
			errores++;
		}
		
		var fechaNac = $("#datos_registro  [name='FechaNac']").wijinputdate("getPostValue");
		if (fechaNac==""){
			$("#datos_registro .error.FechaNac").html('Proporcione su fecha de nacimiento');
			errores++;
		}
		
		var celular = $("#datos_registro [name='Celular']").val();
		if (celular==""){
			$("#datos_registro .error.Celular").html('Proporcione su número de celular');
			errores++;
		}
		
		var selectedIndex = $("#datos_registro [name='CompaniaId']").wijcombobox("option","selectedIndex");  
		if (selectedIndex==-1){
			$("#datos_registro .error.CompaniaId").html('Seleccione la compañia');
			errores++;
		}
		
		return errores;
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
		var errores=this.validarDatosRegistro();
		if (errores>0){ 
			alert("Revise los errores ("+errores+") en el formulario");
		return false;}
		var values = {};
		$.each($('#datos_registro').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});		
		$.ajax({
			type: "POST",
			data:{datos:values},
			url:Portal.base+'asociados/registrar'			
		}).done(function( response ) {
			var resp = eval('(' + response + ')');			
			if (resp.success){				   
				  $('.paso4 .numero_socio').html(resp.datos.SocioID);				  
				  $('.contenido .afiliate .paso4').fadeIn();				   
				  $('.contenido .afiliate .paso3').fadeOut();				  
				  window.location = ("#contenido");
			}else{		
				alert("Error: " + resp.msg);
				// $('#form_buscar_socio .error').html();
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
				  // $('.contenido .afiliate .paso5').fadeIn();				   
				  // $('.contenido .afiliate .paso4').fadeOut();				  
				  window.location =Portal.base +"oficina/entrar#contenido";
			}else{				
				$('#form_password .error.general').html(resp.msg);
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
				console.log("SUCEESS");
				Afiliate.socio = {
					clave	:resp.socio.SocioID,
					nombre	:resp.socio.Nombres + ' ' + resp.socio.Apellidos
				};
				
				$('.datos_del_anfitrion [name="clave"]').html(resp.socio.SocioID);
				$('.datos_del_anfitrion [name="nombre"]').html(resp.socio.Nombres + ' ' + resp.socio.Apellidos);			
				$('.contenido .afiliate .paso1').fadeOut();				
				$('.contenido .afiliate .paso2').fadeIn();
				
				window.location = ("#contenido");
			}else{
				
				$('#form_buscar_socio .error').html(resp.msg);
				$('#form_buscar_socio [name="asociado_id"]').select();
				
			}
			
		});
		
	}
}