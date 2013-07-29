<?php
class comisionModelo extends Modelo{
	var $tabla="comisiones";
	var $campos=array('ComisionId','SocioId','RecargaId','Importe','FechaGenerada','PagoId','NivelId');
	var $pk="ComisionId";
	
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