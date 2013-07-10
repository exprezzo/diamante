<?php
if ( !isset($APP_CONFIG) ) $APP_CONFIG = array();
$APP_CONFIG['main_app']='portal';	//ME GUSTARIA USARLO ASI, pERO SE USA ASI |	
$_DEFAULT_APP='portal';				//                                  <- 
include_once('../'.$_DEFAULT_APP.'/config.php');
?>