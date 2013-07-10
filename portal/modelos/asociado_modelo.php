<?php
class asociadoModelo extends Modelo{
	var $tabla="asociados";
	var $campos=array('SocioID','Nombres','Apellidos','FechaNac','Direccion','Colonia','Ciudad','EstadoId','CodigoPostal','Celular','CompaniaId','CotitularNombre','CotitularFechaNac','CLABE','BancoID','fk_user');
	var $pk="SocioID";
	
	function obtenerSiguienteId(){
		$sql="SELECT max(SocioId) as ultimo FROM asociados;";
		$pdo=$this->getPdo();
		$sth = $pdo->query($sql);
		$res = $sth->fetchAll(PDO::FETCH_ASSOC);
		$siguiente= $res[0]['ultimo'] + 1;		
		return $siguiente;
	}
	
	function nuevo($params){
		return parent::nuevo($params);
	}
	
	
	
	function guardar($params){		
		$dbh=$this->getConexion();		
		$id=empty( $params[$this->pk] )? 0 : $params[$this->pk];
		
		
		if ( empty($id) ){
			//           CREAR		
			$id = $this->obtenerSiguienteId();
			$params['SocioID'] = $id;
			//--------------------------------------------
			$sql='INSERT INTO '.$this->tabla.' SET ';
			foreach($params as $key=>$val){
				$sql.="$key=:$key, ";
			}
			$sql=substr($sql, 0, strlen($sql)-2 );
			
			$sth = $dbh->prepare($sql);							
			foreach($params as $key=>$val){
				$bind=":$key";
				$sth->bindValue($bind, $val,PDO::PARAM_STR);					
			}
			
			$msg=$this->nombre.' Creado';	
		}else{
			//	         ACTUALIZAR
			
			$sql='UPDATE '.$this->tabla.' SET ';
			foreach($params as $key=>$val){
				if ($key==$this->pk ) continue;
				$sql.="$key=:$key, ";
			}
			$sql=substr($sql, 0, strlen($sql)-2 );
			$sql.=' WHERE '.$this->pk.'=:'.$this->pk;
			// nombre=:nombre';
			$sth = $dbh->prepare($sql);							
			foreach($params as $key=>$val){
				$bind=":$key";
				$sth->bindValue($bind, $val,PDO::PARAM_STR);					
			}
			
			$msg=$this->nombre.' Actualizado';	
		}
		$success = $sth->execute();
		
		
		if ($success != true){
			$error=$sth->errorInfo();			
			$success=false; //plionasmo apropósito
			$msg=$error[2];						
			$datos=array();
			
			// echo $msg.$sql; exit;
		}else{
			// $success = rowCount();			
			if ( empty( $id) ){
				$id=$dbh->lastInsertId();
			}
			$datos=$this->obtener(
				array( $this->pk =>$id )
			);
		}
		
		return array(
			'success'	=>$success,			
			'datos' 	=>$datos,
			'msg'		=>$msg
		);	
	}
	function borrar($params){
		return parent::borrar($params);
	}
	function editar($params){
		return parent::obtener($params);
	}
	function buscar($params){
		return parent::buscar($params);
	}
}
?>