<?php
class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/_layout', true);
	}
	function contacto(){
		$vista= $this->getVista();			
		if ( $_SERVER['REQUEST_METHOD']=='GET'){		
			return $this->mostrarVista();
		}else if ( $_SERVER['REQUEST_METHOD']=='POST'){
			if (stristr(PHP_OS,"win"))
				
				$remitente = $_POST['email'] ;
				$destino = "diamoyvg@server56.web-hosting.com" ;
				$asunto = $_POST['asunto'] ;
				$mensaje ='Enviador por: '.$_POST['nombre'].'<br />'. $_POST['mensaje'] ;
			
			$encabezados = "From: $remitente\nReply-To: $destino\nContent-Type: text/html; charset=iso-8859-1" ;
			$exito = mail($destino, $asunto, $mensaje, $encabezados) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error") ;
			if ($exito){
				// return $vista->mostrar( '/email_exito');
				global $APP_PATH;
				header('Location: '.$APP_PATH.'paginas/email_exito#contenido');
			}else{
				$vista->datos=$_POST;
				$vista->error=true;
				return $vista->mostrar( );
			}
		}
	}
}
?>