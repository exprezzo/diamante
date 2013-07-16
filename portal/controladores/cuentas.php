<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/cuenta_modelo.php';
class cuentas extends Controlador{
	var $modelo="cuenta";
	var $campos=array('CuentaID','Nombre','NumeroCuenta','BancoId');
	var $pk="CuentaID";
	var $nombre="cuentas";
	
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