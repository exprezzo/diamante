<?php
class pagoModelo extends Modelo{
	var $tabla="pagos";
	var $campos=array('PagosId','Fecha','Importe','CuentaId','AplicadoPor_usuarioid','RecargaId');
	var $pk="PagosId";
	
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