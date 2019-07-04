<?php
// Código para validar la carga del idioma seleccionado por el visitante
if(isset($_GET['lang'])){

	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		$idiom = "?lang=".$_GET['lang'];
		
		include "lang/".$_GET['lang']."/menu.php";
		include "lang/".$_GET['lang']."/language.php";
		include "lang/".$_GET['lang']."/home.php";
		include "lang/".$_GET['lang']."/service.php";
		include "lang/".$_GET['lang']."/portfolio.php";
		include "lang/".$_GET['lang']."/company.php";
		include "lang/".$_GET['lang']."/footer.php";
		
	}else{
		
		$idiom = "";
		
		include "lang/es/menu.php";
		include "lang/es/language.php";
		include "lang/es/home.php";
		include "lang/es/service.php";
		include "lang/es/portfolio.php";
		include "lang/es/company.php";
		include "lang/es/footer.php";
		
	}
	
}else{
	
	$idiom = "";
	
	include "lang/es/menu.php";
	include "lang/es/language.php";
	include "lang/es/home.php";
	include "lang/es/service.php";
	include "lang/es/portfolio.php";
	include "lang/es/company.php";
	include "lang/es/footer.php";
	
}
?>
