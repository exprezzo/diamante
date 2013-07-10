<?php
class recargaModelo extends Modelo{
	var $tabla="recargas";
	var $campos=array('RecargaId','SocioID','Fecha','Importe','DepositoId','AplicadaPor_usuarioid','FechaAplicada');
	var $pk="RecargaId";
	
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