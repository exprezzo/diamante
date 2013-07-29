<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/comision_modelo.php';
class comisiones extends Controlador{
	var $modelo="comision";
	var $campos=array('ComisionId','SocioId','RecargaId','Importe','FechaGenerada','PagoId','NivelId');
	var $pk="ComisionId";
	var $nombre="comisiones";
	
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