<?
class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/_layout', true);
	}
}
?>