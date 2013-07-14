<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		 var datos=<? echo json_encode($this->res['datos']); ?>;
		 $('#pnl_estado .tabla_pedidos').wijgrid({
			data:datos,
			 allowPaging: true,
                pageSize: 10,


			 columns: [
                    { headerText: "RecargaId",dataIndex:'RecargaId', visible:false  },
					{ headerText: "SocioID",dataIndex:'SocioID',visible:false },
					{ headerText: "Fecha",dataIndex:'Fecha', dataType: "datetime" },
					{ headerText: "Importe",dataIndex:'Importe', dataType: "currency" },										
					{ headerText: "DepositoId",dataIndex:'DepositoId',visible:false },
					{ headerText: "AplicadaPor_usuarioid",dataIndex:'AplicadaPor_usuarioid',visible:false },
					{ headerText: "FechaAplicada",dataIndex:'FechaAplicada',visible:false }
					
                    
                ]
		});
	});
</script>
<style>
	
</style>
<div id="pnl_estado">
	<div style="text-align:center;">
		<h2 style="text-align:center; width:634px;">Estado de cuenta</h2>
		<img class="imagen_titulo" src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />	
	</div>
	 
	<div >
		<H2>Recargas pendientes de pago</H2>
		<table class="tabla_pedidos">
		  <thead>
			<th>column0</th> <th>columnN</th>
		  </thead>
		  <tbody>			
		  </tbody>
		</table>

	</div>
</div>