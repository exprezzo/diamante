<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/asociado_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/compania_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/recarga_modelo.php';
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
	
	
	function afiliate(){
		$compMod = new companiaModelo();
		$res = $compMod->buscar( array() );
		
		$vista = $this->getVista();
		$vista->companias = $res['datos'];		
		$this->mostrarVista();
	}
	
	function registrar(){
	
		// $res=array(
			// 'success'=>false,
			// 'msg'=>'TEST'
		// );		
		// echo json_encode($res); exit;
		
		$fecha=DateTime::createFromFormat ( 'Y/m/d' , $_POST['datos']['FechaNac'] );
		$_POST['datos']['FechaNac'] = $fecha->format('Y-m-d');
		
		if ( !empty( $_POST['datos']['CotitularFechaNac'] ) ){
			$fecha=DateTime::createFromFormat ( 'Y/m/d' , $_POST['datos']['CotitularFechaNac'] );
			if ( $fecha ){ 
				$_POST['datos']['CotitularFechaNac'] = $fecha->format('Y-m-d'); 
			}else{
				$_POST['datos']['CotitularFechaNac']='';
			}
			
		}
		
		
		//Nombres
		//Apellidos
		//FechaNac //2013/7/23
		//Celular
		//CompaniaId
		//CotitularFechaNac
		
		$res = parent::guardar();
		
		if ( $res['success'] && !empty($res['datos']) && !empty($res['datos']['SocioID'])  ){
			$_SESSION['NuevoSocioID'] = $res['datos']['SocioID'];			
			$_SESSION['Socio'] = $res['datos'];			
			
			$params=array(
				'RecargaId'	=>0,
				'SocioID'	=>$_SESSION['NuevoSocioID'],
				'Fecha'		=>date("Y-m-d H:i:s"),
				'Importe'	=>178.5				
			);
			
			$mod=new recargaModelo();
			$res = $mod->guardar( $params );
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
		if ($res['success']){
			$_SESSION['AuthInfo']['IsLoged']=true;
			$_SESSION['AuthInfo']['UserInfo']=$_SESSION['Socio'];
			unset($_SESSION['Socio']);
			unset($_SESSION['NuevoSocioID']);
		}
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