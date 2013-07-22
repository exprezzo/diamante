<?php
class Admin extends Controlador{
	function servir(){
		//-----------------------------------------
		//SEGURIDAD
		global $_PETICION;		
		$permitidas=array('entrar','login','salir');		
		if ( !in_array($_PETICION->accion, $permitidas)  ){
			if ( empty($_SESSION['AuthInfo']) || empty($_SESSION['AuthInfo']['EsAdmin']) ){			
				return $this->entrar();
			}
		}
		//-----------------------------------------
		parent::servir();
	}
	
	function entrar(){
		//Si tiene sesion, mostrar el dashboard de socio
		//Si no tiene sesion, mostrar el login
		//Si es una peticion post, se revisa el usuario y la contraseña
		
		global $_PETICION;		   
		
		if ( empty($_SESSION['AuthInfo']) || empty($_SESSION['AuthInfo']['EsAdmin']) ){
			if ($_SERVER['REQUEST_METHOD']=='GET'){
				global $_PETICION;
				$_PETICION->accion='login';
				return $this->mostrarVista();
			}			
		}else{
			
			$mapa=$this->getMapa();
			
			$vista=$this->getVista();
			$vista->mapa=$mapa;
			$_PETICION->accion='dashboard';
			return $this->mostrarVista();
		}
		
		//SIN SESION, PETICION POST
		$res = $this->login();
		if ($res['success']){
			
			$mapa=$this->getMapa();
			
			$vista=$this->getVista();
			$vista->mapa=$mapa;
			
			$_PETICION->accion='dashboard';			
			// exit;
		}else{
			$_PETICION->accion='login';
		}
		$this->mostrarVista();
	}
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();	
		global $_PETICION;		
		if ( $_PETICION->accion == 'edicion' ||  $_PETICION->accion == 'busqueda'){
			return $vista->mostrar( );
		}else{
			return $vista->mostrar( '/admin',true);
		}
		
	}
	
	function login(){
		
		if ($_SERVER['REQUEST_METHOD']=='GET'){
			return $this->mostrarVista();
		}
		
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		
		$sql='select * from administradores where user = :user and password = md5(:pass)';		
		$mod=new Modelo();
		$pdo=$mod->getPdo();
				
		 $sth = $pdo->prepare($sql);
		
		$sth->bindvalue(':user', $user, PDO::PARAM_STR);
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
		
			$_SESSION['AuthInfo']['EsAdmin']=true;
			$_SESSION['AuthInfo']['AdminInfo']=$res[0];
		}
		return array('success'=>$success);
	}
	function getMapa($SocioId=9501){
		
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
			
			$res[$i]['invitados']=$this->getMapa( $res[$i]['SocioID'] );
		}
		//
		return $res;
	}
	function mapa(){
		
		$mapa=$this->getMapa();
		$vista=$this->getVista();
		$vista->mapa=$mapa;
		$this->mostrarVista();
	}
	
	
	function salir( ){
		unset($_SESSION['AuthInfo']['AdminInfo']);
		unset($_SESSION['AuthInfo']['EsAdmin']);
		global $APP_PATH;			
		header('Location: '.$APP_PATH.'admin/login#contenido');
	}
}
?>