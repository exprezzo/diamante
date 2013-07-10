<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/recarga_modelo.php';
class recargas extends Controlador{
	var $modelo="recarga";
	var $campos=array('RecargaId','SocioID','Fecha','Importe','DepositoId','AplicadaPor_usuarioid','FechaAplicada');
	var $pk="RecargaId";
	var $nombre="recargas";
	
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
		// $_SESSION['NuevoSocioID']=9501;
		if ( empty($_REQUEST['datos']['RecargaId']) ){
			$_POST['datos']['RecargaId']=0;
		}
		
		if ( empty($_SESSION['NuevoSocioID']) ){
			$res=array(
				'success'=>false,
				'msg'=>'No es posible aplicar la recarga, intente mas tarde'
			);
			echo json_encode( $res ); exit;			
		}
		
		$_POST['datos']['SocioID'] = $_SESSION['NuevoSocioID'];
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