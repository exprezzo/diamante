<?php
class depositoModelo extends Modelo{
	var $tabla="depositos";
	var $campos=array('DepositoId','SocioId','RecargaId','FechaDeposito','CuentaId','Importe');
	var $pk="DepositoId";
	
	function nuevo($params){
		return parent::nuevo($params);
	}
	function guardar($params){
		return parent::guardar($params);
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