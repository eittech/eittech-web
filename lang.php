<?php
// Código para validar la carga del idioma seleccionado por el visitante
if(isset($_GET['lang'])){

	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		$idiom = "?lang=".$_GET['lang'];
		
		include "lang/".$_GET['lang']."/menu.php";
		include "lang/".$_GET['lang']."/language.php";
		include "lang/".$_GET['lang']."/home.php";
		include "lang/".$_GET['lang']."/footer.php";
		
	}else{
		
		$idiom = "";
		
		include "lang/en/menu.php";
		include "lang/en/language.php";
		include "lang/en/home.php";
		include "lang/en/footer.php";
		
	}
	
}else{
	
	$idiom = "";
	
	include "lang/en/menu.php";
	include "lang/en/language.php";
	include "lang/en/home.php";
	include "lang/en/footer.php";
	
}
?>
