<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		 var porPagar=<? echo json_encode($this->porPagar['datos']); ?>;
		 var pagadas=<? echo json_encode($this->pagadas['datos']); ?>;
		 
		 pagar=function(RecargaId){		
			window.location.href = Portal.base + 'oficina/pagar?recargaid='+RecargaId; //Will take you to Google.
		 }
		 accionPagar=function(args){
			//Check to make sure we are formatting a data row 
            if (args.row.type & $.wijmo.wijgrid.rowType.data) { 
                //Make the cell font color red 
				console.log("args.row.data"); console.log(args.row.data);
                args.$container.css("color", "blue"); 
                //Since we want to possibly modify the markup of the cell, we have to add the formatted value manually 
                args.$container.text(''); 
                //Check to see if the value matches a certain criteria 
                 if (args.row.data.status == 1) { 
                    //Add custom indicator element to display warning 
                    args.$container.prepend(" <span  onclick='javascript:pagar("+ args.row.data.RecargaId +")' style='cursor:pointer; padding: 3px 30px;margin: 0px 2px;background-image: url(http://png.findicons.com/files/icons/192/finance/24/cash_register.png);background-repeat: no-repeat;' title='Over spending limit'> Pagar</span>"); 
                } 
                //Return true so that the grid knows we have handled the rendering of the cell. The grid will not render the cell when this function returns true 
                return true; 
            } 
		 }
		 statusRender=function(args){
			//Check to make sure we are formatting a data row 
            if (args.row.type & $.wijmo.wijgrid.rowType.data) {                 
                // args.$container.css("color", "blue");                 
                args.$container.text('');                 
                if (args.row.data.status == 1) { 
                    //Add custom indicator element to display warning 
                    args.$container.prepend(" <span style='display:block;text-align:center;'>Pendiente</span>"); 
                } else if (args.row.data.status == 2) { 
					args.$container.prepend(" <span style='display:block;text-align:center;'>Por Confirmar</span>"); 
				}
                //Return true so that the grid knows we have handled the rendering of the cell. The grid will not render the cell when this function returns true 
                return true; 
            } 
		 }
		 $('#pnl_estado .tabla_pedidos').wijgrid({
			data:porPagar,
			 allowPaging: true,
                pageSize: 10,


			 columns: [
                    { headerText: "RecargaId",dataIndex:'RecargaId', visible:false  },
					{ headerText: "SocioID",dataIndex:'SocioID',visible:false },
					{ headerText: "Fecha",dataIndex:'Fecha', dataType: "datetime" },
					{ headerText: "Importe",dataIndex:'Importe', dataType: "currency" },										
					{ headerText: "DepositoId",dataIndex:'DepositoId',visible:false },
					{ headerText: "AplicadaPor_usuarioid",dataIndex:'AplicadaPor_usuarioid',visible:false },
					{ headerText: "FechaAplicada",dataIndex:'FechaAplicada',visible:false },					
					{ headerText: "Status",dataIndex:'status',visible:true,cellFormatter: statusRender  },
					{ headerText: "Acciones",cellFormatter: accionPagar },
					
					
					
                    
                ]
		});
		
		
		
		$('#pnl_estado .tabla_pagadas').wijgrid({
			data:pagadas,
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
		
		<H2>Recargas Pagadas</H2>
		<table class="tabla_pagadas">
		  <thead>
			<th>column0</th> <th>columnN</th>
		  </thead>
		  <tbody>			
		  </tbody>
		</table>
		
	</div>
</div>