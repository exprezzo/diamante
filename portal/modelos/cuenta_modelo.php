<?php
class cuentaModelo extends Modelo{
	var $tabla="cuentas";
	var $campos=array('CuentaID','Nombre','NumeroCuenta','BancoId');
	var $pk="CuentaID";
	
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