<?php
class bancoModelo extends Modelo{
	var $tabla="bancos";
	var $campos=array('BancoId','Nombre');
	var $pk="BancoId";
	
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