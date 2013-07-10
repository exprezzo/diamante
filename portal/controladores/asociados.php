<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/asociado_modelo.php';
class asociados extends Controlador{
	var $modelo="asociado";
	var $campos=array('SocioID','Nombres','Apellidos','FechaNac','Direccion','Colonia','Ciudad','EstadoId','CodigoPostal','Celular','CompaniaId','CotitularNombre','CotitularFechaNac','CLABE','BancoID');
	var $pk="SocioID";
	var $nombre="asociados";
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();	
		global $_PETICION;		
		if ( $_PETICION->accion == 'edicion' ||  $_PETICION->accion == 'busqueda'){
			return $vista->mostrar( );
		}else{
			return $vista->mostrar( '/_layout',true);
		}
		
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
		$res = parent::guardar();
		
		if ( $res['success'] && !empty($res['datos']) && !empty($res['datos']['SocioID'])  ){
			$_SESSION['NuevoSocioID'] = $res['datos']['SocioID'];			
		}
		
	}
	function borrar(){
		return parent::borrar();
	}
	function editar(){
		return parent::editar();
	}
	
	function setpassword(){
			
		if ( empty($_POST['datos']) ){
			$res=array(
				'success'=>false,
				'msg'=>utf8_encode('No se recibió información')
			);
			echo json_encode($res); exit;
		}
		
			
		if ( empty( $_SESSION['NuevoSocioID'] ) ){
			$res=array(
				'success'=>false,
				'msg'=>utf8_encode('La contraseña no puede ser establecida, consulte al administrador del sistema')
			);
			echo json_encode($res); exit;
		}
		
		$datos= $_POST['datos'];		
		$modelo=$this->getModelo();				
		
		$params=array();		
		$params['password']= $datos['pass'];
		$params['SocioID']=  $_SESSION['NuevoSocioID'];		
		
		$res = $modelo->guardar($params);
		unset ($res['datos']);
		echo json_encode( $res );
		
	}
	
	function buscarAnfitrion(){	
		if ( isset($_REQUEST['asociadoId']) ){		
		
			$params=array();
			$params['filtros'] = array(
				array(
					'filterOperator'=>'equals',
					'filterValue'=>$_REQUEST['asociadoId'],
					'dataKey'=>'socioid'
				)
			);
			
			$modelo = $this->getModel();
			$datos = $modelo->buscar( $params ); 
			
			$socio=array();
			
			if ( !$datos['success'] ){
				$msg=isset($datos['msg'])? $datos['msg'] : 'Error';
				$success=false;
			}else{
				if ( $datos['total'] == 1){
					$msg='Exito, Socio encontrado';
					$success=true;
					$socio= $datos['datos'][0];
				}else if($datos['total'] > 1){
					$msg='Hubo un error al buscar el Socio';
					$success=false;					
				}else{
					$msg='!No se encontro el asociado #'.$_REQUEST['asociadoId'].'!';
					$success=false;
					
				}
			}			
		}else{
			$msg='Proporcione el Codigo del anfitrion';
			$success=false;
		}
				
		$res = array(
			'msg'	 =>utf8_encode($msg),
			'success'=>$success,
			'socio'	 =>$socio
		);
		echo json_encode( $res );		
	}
	
	function buscar(){		
		return parent::buscar();
	}
}
?>