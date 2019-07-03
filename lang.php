<?php
// Código para validar la carga del idioma seleccionado por el visitante
if(isset($_GET['lang'])){

	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		$idiom = "?lang=".$_GET['lang'];
		
		include "lang/".$_GET['lang']."/menu.php";
		include "lang/".$_GET['lang']."/language.php";
		
	}else{
		
		$idiom = "";
		
		include "lang/en/menu.php";
		include "lang/en/language.php";
		
	}
	
}else{
	
	$idiom = "";
	
	include "lang/en/menu.php";
	include "lang/en/language.php";
	
}
?>
