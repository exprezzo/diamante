<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/recarga_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/pago_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/cuenta_modelo.php';


class Oficina extends Controlador{
	function servir(){
		//-----------------------------------------
		//SEGURIDAD
		global $_PETICION;		
		$permitidas=array('entrar','login','salir');		
		if ( !in_array($_PETICION->accion, $permitidas)  ){
			if ( empty($_SESSION['AuthInfo']) || empty($_SESSION['AuthInfo']['IsLoged']) ){			
				return $this->entrar();
			}
		}
		//-----------------------------------------
		parent::servir();
	}
	function mostrarVista($vistaFile=''){	
		global $_PETICION;				
		$vista= $this->getVista();
		
		if ( $_PETICION->accion == 'edicion' ||  $_PETICION->accion == 'busqueda'){
			return $vista->mostrar( );
		}else{
			return $vista->mostrar( '/_oficina',true);
		}
		
	}
	function salir( ){
		unset($_SESSION['AuthInfo']);
		global $APP_PATH;			
		header('Location: '.$APP_PATH.'oficina/entrar#contenido');
	}
	
	var $nivel=0;
	// function mapa(){
		// $SocioId=$_SESSION['AuthInfo']['UserInfo']['SocioID'];
		// $mapa=$this->getMapa($SocioId);
	// }
	function entrar(){
		//Si tiene sesion, mostrar el dashboard de socio
		//Si no tiene sesion, mostrar el login
		//Si es una peticion post, se revisa el usuario y la contraseña
		
		global $_PETICION;
		   // unset ($_SESSION['AuthInfo']);
		
		if ( empty($_SESSION['AuthInfo']) || empty($_SESSION['AuthInfo']['IsLoged']) ){
			if ($_SERVER['REQUEST_METHOD']=='GET'){
				global $_PETICION;
				$_PETICION->accion='login';
				return $this->mostrarVista();
			}			
		}else{
			$SocioId=$_SESSION['AuthInfo']['UserInfo']['SocioID'];
			$mapa=$this->getMapa($SocioId);
			
			$vista=$this->getVista();
			$vista->mapa=$mapa;
			$_PETICION->accion='dashboard';
			return $this->mostrarVista();
		}
		
		//SIN SESION, PETICION POST
		$res = $this->login();
		if ($res['success']){
			$SocioId=$_SESSION['AuthInfo']['UserInfo']['SocioID'];
			$mapa=$this->getMapa($SocioId);
			
			$vista=$this->getVista();
			$vista->mapa=$mapa;
			
			$_PETICION->accion='dashboard';			
			// exit;
		}else{
			$_PETICION->accion='login';
		}
		$this->mostrarVista();
	}
	
	function mapa(){
		$SocioId=$_SESSION['AuthInfo']['UserInfo']['SocioID'];
		$mapa=$this->getMapa($SocioId);
		$vista=$this->getVista();
		$vista->mapa=$mapa;
		$this->mostrarVista();
	}
	function getMapa($SocioId, $nivel=0){
		$nivel++;
		if ($nivel > 3) return array();
		$sql='SELECT SocioID, Nombres, Apellidos FROM asociados WHERE InvitadoPor_SocioId=:InvitadoPor_SocioId';
		$mod= new Modelo();
		$pdo=$mod->getPdo();
		$sth = $pdo->prepare($sql);		
		// $SocioId=$_SESSION['AuthInfo']['UserInfo']['SocioID'];		
		$sth->bindValue(':InvitadoPor_SocioId', $SocioId, PDO::PARAM_STR);
		
		$exito = $sth->execute();
		
		if (!$exito){
			$error = $mod->getError($sth);
			echo json_enode( $error ); 
			exit;
		}
		$res = $sth->fetchAll(PDO::FETCH_ASSOC);
		// print_r($res);
		for($i=0; $i < sizeof($res); $i++ ){
			
			$res[$i]['invitados']=$this->getMapa( $res[$i]['SocioID'], $nivel );
		}
		//
		return $res;
	}
	
	function pagar(){
		$vista=$this->getVista();
		
		if ($_SERVER['REQUEST_METHOD']=='GET' ){
			$mod=new recargaModelo();		
			$params=array('RecargaId'=> $_GET['recargaid'] );
			$recarga = $mod->obtener($params);
			
			$vista->recarga =$recarga ;
			
			$modCuenta=new cuentaModelo();
			$res = $modCuenta->buscar( array() );
			$vista->cuentas = $res;
			$this->mostrarVista();
		}
		// $vista->recarga =array('RecargaId'=>0, 'Importe'=>0,'Fecha'=>'');
		// return $this->mostrarVista();
		
		$importe=str_replace( "$" , "" , $_POST['Importe'] );
		$importe=str_replace( "," , "" , $importe );
		$fecha=DateTime::createFromFormat ( 'm/d/Y' , $_POST['Fecha'] );
		$socioId =  $_SESSION['AuthInfo']['UserInfo']['SocioID'];
		
		
		$datos = array(
			'RecargaId'=>$_POST['RecargaId'],
			'Importe'=>$importe,
			'Fecha'=>$fecha->format('Y-m-d'),
			'AplicadoPor_usuarioid'=>$socioId,
			'Cuentaid'=>$_POST['Cuentaid']
		);
		
		$mod=new pagoModelo();		
		$res   = $mod->guardar( $datos );
		if ($res['success']){
			$mod=new recargaModelo();		
			$params=array(
				'RecargaId'=> $_POST['RecargaId'],
				'status'=>2
			);
			$recarga = $mod->guardar($params);
		
			global $_PETICION;		
			$_PETICION->accion='pago_exito';
			global $APP_PATH;
			header('Location: '.$APP_PATH.'oficina/pago_exito'); exit;
		}else{
			$vista=$this->getVista();
			$vista->datos=$datos;
			$vista->error=$res;			
		}
		$this->mostrarVista();
		
	}
	function estado(){
		$vista=$this->getVista();
		$socioId =  $_SESSION['AuthInfo']['UserInfo']['SocioID'];
		$params=array(
			'filtros'=>array(
				array(
					'filterOperator'=>'equals',
					'filterValue'=>$socioId,
					'dataKey'=>'SocioID'
				),
				array(
					'filterOperator'=>'equals',
					'filterValue'=>'',
					'dataKey'=>'DepositoId'
				)
				
			)
		);
		$mod=new recargaModelo();		
		$res   = $mod->buscar( $params );
		$vista->porPagar = $res;
		
		$params=array(
			'filtros'=>array(
				array(
					'filterOperator'=>'equals',
					'filterValue'=>$socioId,
					'dataKey'=>'SocioID'
				),
				array(
					'filterOperator'=>'greater',
					'filterValue'=>'',
					'dataKey'=>'DepositoId'
				)
				
			)
		);
		$pagadas   = $mod->buscar( $params );
		$vista->pagadas=$pagadas;
		
		
		
		$this->mostrarVista();
		
	}
	function pedidos(){
		if ($_SERVER['REQUEST_METHOD']=='GET'){
			$this->mostrarVista();
		}
		
		// quitar comas y signo $ al numero		
		// dar formato a la fecha
		// obtener el id del asociado logeado
		
		
		$importe=str_replace( "$" , "" , $_POST['Importe'] );
		$importe=str_replace( "," , "" , $importe );
		$fecha=DateTime::createFromFormat ( 'm/d/Y' , $_POST['Fecha'] );
		$socioId =  $_SESSION['AuthInfo']['UserInfo']['SocioID'];
		
		// print_r($_POST);
		// echo $fecha->format('Y-m-d'); exit;
		$datos = array(
			'RecargaId'=>0,
			'Importe'=>$importe,
			'Fecha'=>$fecha->format('Y-m-d'),
			'SocioID'=>$socioId
		);
		
		$mod=new recargaModelo();		
		$res   = $mod->guardar( $datos );
		if ($res['success']){
			global $_PETICION;		
			$_PETICION->accion='pedido_exito';
			global $APP_PATH;
			header('Location: '.$APP_PATH.'oficina/pedido_exito'); exit;
		}else{
			$vista=$this->getVista();
			$vista->datos=$datos;
			$vista->error=$res;			
		}
		
		
		$this->mostrarVista();
	}
	
	function login(){
		
		if ($_SERVER['REQUEST_METHOD']=='GET'){
			return $this->mostrarVista();
		}
		
		$user=$_POST['user']*1;
		$pass=$_POST['pass'];
		
		
		$sql='select * from asociados where SocioID = :SocioID and password = md5(:pass)';		
		$mod=new Modelo();
		$pdo=$mod->getPdo();
				
		 $sth = $pdo->prepare($sql);
		
		$sth->bindvalue(':SocioID', $user*1, PDO::PARAM_INT);
		$sth->bindvalue(':pass', $pass, PDO::PARAM_STR);
		$exito = $sth->execute();
		
		if (!$exito){
			$error = $mod->getError($sth);
			echo json_enode( $error ); 
			exit;
		}
		$res = $sth->fetchAll(PDO::FETCH_ASSOC);
		// echo $sql.$user.$pass;
		
		
		$success = sizeof($res) == 1 ? true : false;
		
		if ($success){
			$_SESSION['AuthInfo']['IsLoged']=true;
			$_SESSION['AuthInfo']['UserInfo']=$res[0];
		}
		return array('success'=>$success);
	}
}
?>