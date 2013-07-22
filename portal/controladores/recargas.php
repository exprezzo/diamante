<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/recarga_modelo.php';
class recargas extends Controlador{
	var $modelo="recarga";
	var $campos=array('RecargaId','SocioID','Fecha','Importe','DepositoId','AplicadaPor_usuarioid','FechaAplicada');
	var $pk="RecargaId";
	var $nombre="recargas";
	
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();	
		global $_PETICION;		
		if ( $_PETICION->accion == 'edicion' ||  $_PETICION->accion == 'busqueda'){
			return $vista->mostrar( );
		// }else if( $_PETICION->accion == 'aplicar' || $_PETICION->accion == 'recarga_aplicada'){
		}else {
			return $vista->mostrar( '/admin',true);
		}		
	}
	
	function aplicar(){
		$vista=$this->getVista();
		
		if ($_SERVER['REQUEST_METHOD']=='GET' ){
			
			$params=array('RecargaId'=> $_GET['RecargaId'] );			
			$vista->recarga =$params ;
			
			return $this->mostrarVista();
		}		
		
		$foliosistema=$_POST['foliosistema'];
		$RecargaId=$_POST['RecargaId'];		
		$AplicadaPor_usuarioId =  $_SESSION['AuthInfo']['AdminInfo']['AdminId'];		
		
		$datos = array(			
			'RecargaId'				=>$RecargaId,
			'foliosistema'			=>$foliosistema,
			'AplicadaPor_usuarioId'	=>$AplicadaPor_usuarioId,
			'status'				=>4
		);
		
		$mod=$this->getModelo();
		$res   = $mod->guardar( $datos );
		if ($res['success']){
			global $_PETICION;
			$_PETICION->accion='recarga_aplicada';
			global $APP_PATH;
			header('Location: '.$APP_PATH.'recargas/recarga_aplicada'); exit;
		}else{
			$vista=$this->getVista();
			$vista->datos=$datos;
			$vista->error=$res;
			print_r($vista->error);
		}
		$this->mostrarVista();
	}
	
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