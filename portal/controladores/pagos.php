<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/pago_modelo.php';
class pagos extends Controlador{
	var $modelo="pago";
	var $campos=array('PagosId','Fecha','Importe','CuentaId','AplicadoPor_usuarioid','RecargaId');
	var $pk="PagosId";
	var $nombre="pagos";
	
	function nuevo(){		
		$campos=$this->campos;
		$vista=$this->getVista();				
		for($i=0; $i<sizeof($campos); $i++){
			$obj[$campos[$i]]='';
		}
		$vista->datos=$obj;		
		
		global $_PETICION;
		$vista->mostrar('/'.$_PETICION->controlador.'/edicion');
		
		
	}
	
	function guardar(){
		return parent::guardar();
	}
	function borrar(){
		return parent::borrar();
	}
	function editar(){
		return parent::editar();
	}
	function buscar(){
		return parent::buscar();
	}
}
?>