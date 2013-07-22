<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/deposito_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/recarga_modelo.php';
class depositos extends Controlador{
	var $modelo="deposito";
	var $campos=array('DepositoId','SocioId','RecargaId','FechaDeposito','CuentaId','Importe','Ficha');
	var $pk="DepositoId";
	var $nombre="depositos";
	function confirmar(){
		
		
		if ( empty($_POST['DepositoId']) ){
			$res=array(
				'success'=>false,
				'Error al identificar el Deposito'
			);
			echo json_encode( $res );
		}
		
		$DepositoId=$_POST['DepositoId'];
		
		$mod=new Modelo();
		$pdo = $mod->getPdo();
		
		$pdo->beginTransaction();
		//-------------------------------------------------------------------------
		$sql="UPDATE depositos SET Status=2 WHERE DepositoId=:DepositoId";			
		$sth = $pdo->prepare( $sql );
		$sth->bindValue(':DepositoId',$DepositoId);
		
		$exito = $sth->execute();
		if ( !$exito ){
			$error =$mod->getError( $sth );
			$pdo->rollBack();
			echo json_encode( $error ); exit;
		}
		//-------------------------------------------------------------------------
		$sql="SELECT * FROM depositos WHERE DepositoId=:DepositoId";
		$sth = $pdo->prepare( $sql );
		$sth->bindValue(':DepositoId',$DepositoId);
		
		$exito = $sth->execute();
		if ( !$exito ){
			$error =$mod->getError( $sth );
			$pdo->rollBack();
			echo json_encode( $error ); exit;
		}
		
		$depositos = $sth->fetchAll(PDO::FETCH_ASSOC);
		$deposito = $depositos[0];
		
		$RecargaId = $deposito['RecargaId'];		
		//-------------------------------------------------------------------------
		$sql="UPDATE recargas SET status=3,DepositoId=:DepositoId WHERE RecargaId=:RecargaId";
		$sth = $pdo->prepare( $sql );
		$sth->bindValue(':RecargaId',$RecargaId);
		$sth->bindValue(':DepositoId',$DepositoId);
		
		$exito = $sth->execute();
		if ( !$exito ){
			$error =$mod->getError( $sth );
			$pdo->rollBack();
			echo json_encode( $error ); exit;
		}
		//-------------------------------------------------------------------------
		$pdo->commit();
		
		$res=array(
			'success'=>true,
			'msg'=> utf8_encode('Depósito confirmado')
		);
		echo json_encode( $res );
	}
	
	function pendientes(){
		$vista=$this->getVista();			
		$params=array(
			'filtros'=>array(
				array(
					'dataKey'		=>'Status',
					'filterOperator'=>'equals',
					'filterValue'	=>1					
				)
				
			)
		);
		$mod=new depositoModelo();		
		$res   = $mod->buscar( $params );
		$vista->pendientes = $res;
		
		$mod=new recargaModelo();
		
		$params=array(
			'filtros'=>array(
				array(
					'dataKey'		=>'status',
					'filterOperator'=>'equals',
					'filterValue'	=>3			
				)
				
			)
		);
		$recargas   = $mod->buscar( $params );
		$vista->recargas=$recargas;
		
		
		
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