<?php

$CORE_PATH='../core/';
require_once 'config.php';
require_once $CORE_PATH.'modelo/modelo.php';

$mod=new Modelo();
$pdo=$mod->getPdo();

//obtengo la clave de cada socio para aplicarles el cargo semanal
$sql='SELECT SocioID FROM asociados';
$sth = $pdo->prepare($sql);
$exito = $sth->execute();
if ( !$exito ){
	$error = $mod->getError($sth ); 
	print_r($error); exit;				//GUARDAR UN LOG EN UN ARCHIVO
}
$datos=$sth->fetchAll( PDO::FETCH_ASSOC);

$pdo->beginTransaction();

$sql='INSERT INTO recargas SET SocioID=:SocioID,Fecha=now(),Importe=175.5';
foreach($datos as $socio){
	$sth = $pdo->prepare($sql);
	$sth->bindValue(':SocioID', $socio['SocioID'], PDO::PARAM_STR);	
	$exito = $sth->execute();
	if ( !$exito ){
		$error = $mod->getError($sth ); 
		$pdo->rollBack();
		print_r($error); exit;        //GUARDAR UN LOG EN UN ARCHIVO
	}	
}
$pdo->commit();
?>