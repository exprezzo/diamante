<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>
<style>
	.contenido .somos p{font-family:'Accidental Presidency'; text-align:justify;color:#464646; font-size:18px; padding:20px;}
	.contenido .somos{text-align:center;}
	


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

.wijmo-wijgrid .wijmo-wijgrid-headerrow .wijmo-wijgrid-headertext{
	font-size: 14px;
	padding: 4px 0 4px 0;
}
.ui-widget{font-size:14px;}
#contenido{
	height:auto;
}

</style>

<script>
	$(function(){
		$("#tabla_comisiones").wijgrid({
			
			columns:[{},{},{dataType:'currency'},{dataType:'currency'},{dataType:'currency'}]
		});
		$("#tabla_comisiones2").wijgrid({
			
			columns:[{},{},{dataType:'currency'},{dataType:'currency'},{dataType:'currency'}]
		});
		
		var h = $('#contenido').height();
		$('.menu_box').height( h +14 );
	});
	
</script>
	<div class="somos"> 
		
		<div style="text-align:center;margin-top:0;">
				<h2 style="line-height: 17px;margin: 17px 0 8px 0;padding: 0;">PLAN DE COMISIONES</h2>	
				<h2 style="line-height: 17px;margin: 0 0 5px 0;padding: 0;">Ingreso por tiempo aire</h2>	
				<img src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />
				
			</div>
		<div class="caja-sombra" style="padding-top:8px;"> 
			<div style="text-align:center;margin-top:0;">
				<h2 style="margin:0 0 7px 0;">REGALIAS 4 (personas) X 5 (niveles)</h2>
			</div>
			<div>
			Afilia a 4 personas y estas 4 a otras 4 personas y así hasta el 5 nivel,  y al hacer cada 
			uno su consumo de tiempo aire a través de Diamond People S.A. de C.V. obtendrás las 
			siguientes regalías de manera  semanal.
			</div>
			
			<br />
			<table id="tabla_comisiones">
				<thead>
					<th >NIVEL</th> <th>SOCIOS</th><th>COMISIÓN POR SOCIO</th><th>COMISION POR NIVEL</th><th>SUMA TOTAL</th>
				</thead>
				<tbody >
					<tr>
					  <td>1</td>  
					  <td>4</td>
					  <td>8</td>
					  <td>32</td>
					  <td>32</td>
					  
					</tr>
					
					<tr>
					  <td>2</td>  
					  <td>16</td>
					  <td>9</td>
					  <td>144</td>
					  <td>176</td>					  
					</tr>
					
					<tr>
					  <td>3</td>  
					  <td>64</td>
					  <td>10</td>
					  <td>640</td>
					  <td>816</td>
					  
					</tr>
					
					<tr>
					  <td>4</td>  
					  <td>256</td>
					  <td>11</td>
					  <td>2816</td>
					  <td>3632</td>
					 </tr>
					
					<tr>
					  <td>5</td>  
					  <td>1024</td>
					  <td>16</td>
					  <td>16384</td>
					  <td>2016	</td>
					  
					</tr>
					
					<tr>
					  <td>TOTALES</td>  
					  <td>1364</td>
					  <td>54</td>
					  <td>20016</td>
					  <td>2016</td>
					  
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="caja-sombra" style="padding-top:8px;"> 
			<div style="text-align:center;margin-top:0;">
				<h2 style="margin:0 0 7px 0;">REGALIAS 4 (personas) X 5 (niveles)</h2>
			</div>
			<div>
			Ganancias extras por invitado plus .
			El invitado plus es aquel socio que fue invitado después del haber completado tu primer 
			nivel de 4 y cuenta del 5to. invitado hasta infinito.
			</div>
			
			<table id="tabla_comisiones2">
				<thead>
					<th >NIVEL</th> <th>SOCIOS</th><th>COMISIÓN POR SOCIO</th><th>COMISION POR NIVEL</th><th>SUMA TOTAL</th>
				</thead>
				<tbody >
					<tr>
					  <td>1</td>  
					  <td>4</td>
					  <td>4</td>
					  <td>16</td>
					  <td>16</td>
					  
					</tr>
					
					<tr>
					  <td>2</td>  
					  <td>16</td>
					  <td>4.5</td>
					  <td>72</td>
					  <td>88</td>					  
					</tr>
					
					<tr>
					  <td>3</td>  
					  <td>64</td>
					  <td>5</td>
					  <td>320</td>
					  <td>408</td>
					  
					</tr>
					
					<tr>
					  <td>4</td>  
					  <td>256</td>
					  <td>5.5</td>
					  <td>1408</td>
					  <td>1816</td>
					 </tr>
					
					<tr>
					  <td>5</td>  
					  <td>1024</td>
					  <td>8</td>
					  <td>8192</td>
					  <td>10008	</td>
					  
					</tr>
					
					<tr>
					  <td>TOTALES</td>  
					  <td>1364</td>
					  <td>27</td>
					  <td>10008</td>
					  <td>10008</td>
					  
					</tr>
				</tbody>
			</table>
		</div>
			
		
	</div>
