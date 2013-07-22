<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-open.all.3.20131.7.min.js" type="text/javascript"></script>
<script src="<?php echo $APP_PATH; ?>web/libs/wijmo3.2/js/jquery.wijmo-pro.all.3.20131.7.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		 var porPagar=<? echo json_encode($this->pendientes['datos']); ?>;
		 var recargas=<? echo json_encode($this->recargas['datos']); ?>;
		 
		 confirmarDeposito=function(DepositoId){
			$.ajax({
				type: "POST",
				data:{DepositoId:DepositoId},
				url:Portal.base+'depositos/confirmar'
			}).done(function( response ) {
				var resp = eval('(' + response + ')');
				if ( resp.success ){
					alert("EXITO");
				}else{
					var msg = (resp.msg)? resp.msg : 'Error al confirmar';
					alert(msg);
				}
			});
		 }
		 aplicarRecarga=function(RecargaId){
			
			window.location.href = Portal.base + 'recargas/aplicar?RecargaId='+RecargaId; //
		 }
		 renderAccionConfirmar=function(args){
			//Check to make sure we are formatting a data row 
            if (args.row.type & $.wijmo.wijgrid.rowType.data) { 
                //Make the cell font color red 
				
                args.$container.css("color", "blue"); 
                //Since we want to possibly modify the markup of the cell, we have to add the formatted value manually 
                args.$container.text(''); 
                //Check to see if the value matches a certain criteria 
                 if (args.row.data.Status == 1) { 
                    //Add custom indicator element to display warning 
                    args.$container.prepend(" <span  onclick='javascript:confirmarDeposito("+ args.row.data.DepositoId +")' style='cursor:pointer; padding: 3px 30px;margin: 0px 2px;background-image: url(http://png.findicons.com/files/icons/192/finance/24/cash_register.png);background-repeat: no-repeat;' title='Confirmar'> Confirmar</span>"); 
                } 
                //Return true so that the grid knows we have handled the rendering of the cell. The grid will not render the cell when this function returns true 
                return true; 
            } 
		 }
		 renderAccionAplicar=function(args){
			//Check to make sure we are formatting a data row 
            if (args.row.type & $.wijmo.wijgrid.rowType.data) { 
                //Make the cell font color red 
				
                args.$container.css("color", "blue"); 
                //Since we want to possibly modify the markup of the cell, we have to add the formatted value manually 
                args.$container.text(''); 
                //Check to see if the value matches a certain criteria 
                 if (args.row.data.status == 3) { 
                    //Add custom indicator element to display warning 
                    args.$container.prepend(" <span  onclick='javascript:aplicarRecarga("+ args.row.data.RecargaId +")' style='cursor:pointer; padding: 3px 30px;margin: 0px 2px;background-image: url(http://png.findicons.com/files/icons/192/finance/24/cash_register.png);background-repeat: no-repeat;' title='Aplicar'> Aplicar</span>"); 
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
                if (args.row.data.Status == 1) { 
                    //Add custom indicator element to display warning 
                    args.$container.prepend(" <span style='display:block;text-align:center;'>Pendiente</span>"); 
                } else if (args.row.data.status == 2) { 
					args.$container.prepend(" <span style='display:block;text-align:center;'>Por Confirmar</span>"); 
				}
                //Return true so that the grid knows we have handled the rendering of the cell. The grid will not render the cell when this function returns true 
                return true; 
            } 
		 }
		 $('#pnl_depositos .tabla_pendientes').wijgrid({
			data:porPagar,
			 allowPaging: true,
             pageSize: 10			 
			 ,columns: [
                    { headerText: "DepositoId",dataIndex:'DepositoId', visible:false  },
					{ headerText: "SocioID",dataIndex:'SocioId',visible:true },
					{ headerText: "RecargaId",dataIndex:'RecargaId',visible:false },					
					{ headerText: "Fecha",dataIndex:'FechaDeposito', dataType: "datetime" },
					{ headerText: "CuentaId",dataIndex:'CuentaId',visible:true },					
					{ headerText: "Ficha",dataIndex:'Ficha',visible:true },
					{ headerText: "Importe",dataIndex:'Importe', dataType: "currency" },
					{ headerText: "Acciones",dataIndex:'Status', visible:true,cellFormatter: renderAccionConfirmar }
                ]
		});
		
		
		
		$('#pnl_depositos .tabla_recargas').wijgrid({
			data:recargas,
			 allowPaging: true,
                pageSize: 10
				,columns: [
                    { headerText: "RecargaId",dataIndex:'RecargaId', visible:false  },
					{ headerText: "SocioID",dataIndex:'SocioID',visible:true },
					{ headerText: "Fecha",dataIndex:'Fecha', dataType: "datetime" },
					{ headerText: "Importe",dataIndex:'Importe', dataType: "currency" },					
					{ headerText: "DepositoId",dataIndex:'DepositoId',visible:false },					
					{ headerText: "AplicadaPor_usuarioId",dataIndex:'AplicadaPor_usuarioId',visible:false },
					{ headerText: "FechaAplicada",dataIndex:'FechaAplicada',visible:false },
					{ headerText: "Folio",dataIndex:'Folio',visible:false },
					{ headerText: "status",dataIndex:'status',visible:true,cellFormatter: renderAccionAplicar }
                ]
		});
	});
</script>
<style>
	
</style>
<div id="pnl_depositos">
	<div style="text-align:center;">
		<h2 style="text-align:center; width:634px;">Estado de cuenta</h2>
		<img class="imagen_titulo" src="<?php echo $MOD_WEB_PATH; ?>imagenes/separador_formulario.png" />	
	</div>
	 
	<div >
		<H2>Depositos por confirmar</H2>
		<table class="tabla_pendientes">
		  <thead>
			<th>column0</th> <th>columnN</th>
		  </thead>
		  <tbody>			
		  </tbody>
		</table>
		
		<H2>Recargas por aplicar</H2>
		<table class="tabla_recargas">
		  <thead>
			<th>column0</th> <th>columnN</th>
		  </thead>
		  <tbody>			
		  </tbody>
		</table>
		
	</div>
</div>