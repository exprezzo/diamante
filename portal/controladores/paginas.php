<?php
class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/_layout', true);
	}
	function contacto(){
		if ( $_SERVER['REQUEST_METHOD']=='GET'){		
			return $this->mostrarVista();
		}else if ( $_SERVER['REQUEST_METHOD']=='POST'){
			echo 'MANDAR EMAIL';
		}
	}
}
?>