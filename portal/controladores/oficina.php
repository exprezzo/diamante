<?php
class Oficina extends Controlador{
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();	
		global $_PETICION;		
		if ( $_PETICION->accion == 'edicion' ||  $_PETICION->accion == 'busqueda'){
			return $vista->mostrar( );
		}else{
			return $vista->mostrar( '/_layout',true);
		}
		
	}
	function salir( ){
		unset($_SESSION['AuthInfo']);
		global $APP_PATH;			
		header('Location: '.$APP_PATH.'oficina/entrar#contenido');
	}
	
	var $nivel=0;
	
	function entrar(){
		//Si tiene sesion, mostrar el dashboard de socio
		//Si no tiene sesion, mostrar el login
		//Si es una peticion post, se revisa el usuario y la contrase�a
		
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
	
	function getMapa($SocioId){
		$this->nivel++;
		if ($this->nivel > 3) return array();
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