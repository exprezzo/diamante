<style>
#preguntas_frecuenes{
	
}

#preguntas_frecuenes h3{
	font-family:"Accidental Presidency";
	margin:0; padding:0;
	color:#464646;
}
#preguntas_frecuenes  .pregunta p{
	text-align: justify;
	margin:0; padding:0;
	margin-bottom:20px;
	
}
.menu_box{
	height:1444px;
}
#contenido{
	height:auto;
}


.caja-sombra 
{
  position: relative;
  width: 85%;
  background: white;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 2em 1.5em;
  color: rgba(0,0,0, .8);
  text-shadow: 0 1px 0 #fff;
  line-height: 1.5;
  margin: 22px auto;  
  color:#464646;
  font-size:18px; 
  webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;


}

.caja-sombra:before, .caja-sombra:after 
{
  z-index: -1; 
  position: absolute; 
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%; 
  top: 80%;
  max-width:300px;
  background: rgba(0, 0, 0, 0.7); 
  -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);   
  -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  -webkit-transform: rotate(-3deg);    
  -moz-transform: rotate(-3deg);   
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}

.caja-sombra:after 
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
#contenido{
z-index: 1;
position: relative;


}

</style>

<script>
	$(function(){
				
		var h = $('#contenido').height();
		$('.menu_box').height( h +14 );
	});
	
</script>
<div id="preguntas_frecuenes" style="" class="caja-sombra">
	<div style="text-align:center;">
		<h2>Preguntas Frecuentes</h2>		
		<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />								
	</div>
	<div style="padding:15px;" >
		<div class="pregunta">
			<h3>1.- VOY A VENDER TIEMPO AIRE?</h3>
			<p>No </p>
		</div>
		<div class="pregunta">
			<h3>2.-  QUE TENGO HACER?</h3>
			<p>Seguir�s consumiendo tiempo aire,  pero ahora con Diamond people S.A. de C.V. y a la misma vez invitar a 4 personas o m�s a que tambi�n hagan lo mismo.</p>
		</div>
		<div class="pregunta">
			<h3>3.- CUAL ES EL COSTO DE LA AFILIACION?</h3>
			<p>Para poder mantener activa tu afiliaci�n y tener derecho al pago de regal�as se te cobran 10 pesos semanales mismos que ya estar�n incluidos en los $ 170.00 pesos de tu consumo semanal. </p>
		</div>
		<div class="pregunta">
			<h3>4.- QUE OCUPO PARA REGISTRARME?</h3>
			<p>El numero de afiliado de la persona que te invito, nombre completo, fecha de nacimiento, direcci�n, n�mero 
			telef�nico a donde se te hara la recarga de tiempo aire y compa��a a la que pertenece, nombre y fecha de nacimiento 
			de un cotitular o beneficiario y n�mero de cuenta, clave interbancaria y nombre del banco a donde se te har�n tus 
			dep�sitos semanales y correo electr�nico.</p>
		</div>
		<div class="pregunta">
			<h3>5.-  EL NUMERO DE LA CUENTA BANCARIA PUEDE SER DE CUALQUIER PERSONA?</h3>
			<p>El n�mero de cuenta debe ser  personal y por ning�n motivo de otra persona que no sea la afiliada, de lo contrario no 
			se te podr� realizar tu dep�sito por la regal�as generadas.</p>
		</div>
		<div class="pregunta">
			<h3>6.- QUE COMPA�IAS DE TEFEFONO PARTICIPAN.</h3>
			<p>Todas, TELCEL, MOVISTAR, UNEFON, IUSACELL Y NEXTEL </p>
		</div>
		<div class="pregunta">
			<h3>7.-  DE CUANTO SERA EL CONSUMO QUE DEBO HACER?</h3>
			<p>$ 170.OO pesos semanales.</p>
		</div>
		<div class="pregunta">
			<h3>8.-  DE CUANTO SERA LA RECARGA QUE DIAMOND PEOPLE S.A de C.V.  REALIZARA A MI TELEFONO CELULAR.</h3>
			<p>Diamond people s.a. de c.v. te har� una recarga de  100 pesos y tu compa��a celular la de la promoci�n que este 
			manejando en el momento que nosotros te efectuemos tu recarga.</p>
		</div>
		<div class="pregunta">
			<h3>9.- CADA CUANDO PAGARA LA EMPRESA.</h3>
			<p>Cada semana los d�as s�bado.</p>
		</div>
		<div class="pregunta">
			<h3>10.- ME COBRARAN CUOTA DE ADMINISTRACIN.</h3>
			<p>Si, si se te cobrara cuota de administraci�n del  5 % sobre el monto depositado.</p>
		</div>
		<div class="pregunta">
			<h3>11.- PUEDO TENER UN REPORTE DE MIS GANANCIAS EN TIEMPO REAL.</h3>
			<p>Si, este lo encontraras en tu oficina virtual en la opci�n reporte de comisiones.</p>
		</div>
		<div class="pregunta">
			<h3>12.- QUE PASA SI DEJO HACER MI CONSUMO SEMANAL.</h3>
			<p>Tus regal�as no se te ser�n depositadas y al 3 consumo no detectado ser�s dado de baja.</p>
		</div>
		<div class="pregunta">
			<h3>13.- EXISTE ALGUN TOPE O L�MITE DE LAS PERSONAS QUE PUEDO INVITAR.</h3>
			<p>No, no existe tope o l�mite alguno t� puedes asociar a cuantas personas gustes.</p>
		</div>
		<div class="pregunta">
			<h3>14.- QUE HACE LA EMPRESA CON LOS  $ 170.00 PESOS QUE DEPOSITE?</h3>
			<p>100 pesos son destinados para tu tiempo aire, 10 pesos retenidos por el pago de tu inscripci�n, 54 pesos para el pago 
			de comisiones de todos los socios y los 6 pesos restantes para gastos administrativos.</p>
		</div>
		<div class="pregunta">
			<h3>15.- COMO HAGO MI CONSUMO?  </h3>
			<p>Deber�s realizar un dep�sito de $ 170.00 pesos a nombre de  DIAMOND PEOPLE  S.A. de C.V.  A la cuenta bancaria No. 
			Xxxx  xxxx xxxx xxx x  De Bancomer  y registrarlo en la p�gina de la empresa en �REGISTRA TU CONSUMO�
			Nota: Los registros de consumo son a cualquier hora del d�a los 365 d�as de a�o.
			Y  tu recarga ser� efectuada de lunes a viernes de 9:00 a.m. a 7:00 p.m. y los s�bados de 10:00 am a 2:00 p.m.
			</p>
		</div>
		<div class="pregunta">
			<h3> 16.-QUE HACER SI TENGO UNA DUDA O NECESITO AYUDA:</h3>
			<p>Deber�s acudir a la persona que te invito o comunicarte via telef�nica al  xx xx xx xxx xxx o mandar un correo 
			electr�nico a ____________</p>
		</div>		
	</div>
</div>

