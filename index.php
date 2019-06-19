<?php

// Código de validación de ubicación del visitante usando la clase 'UserLocalization'
require_once "php/localization.php";

$new_localization = new UserLocalization();

$user_localization = $new_localization->localization();

// Cargamos la página de inicio correspondiente según la localización del visitante
if($user_localization['geoplugin_countryCode'] == ""){
	
	include "content/robotics/es_ve/home.php";
	
}else if($user_localization['geoplugin_countryCode'] == "US"){
	
	include "content/robotics/en_us/home.php";
	
}else if($user_localization['geoplugin_countryCode'] == "FR"){
	
	include "content/robotics/fr_fr/home.php";
	
}else if($user_localization['geoplugin_countryCode'] == "BR"){
	
	include "content/robotics/pt_br/home.php";
	
}else if($user_localization['geoplugin_countryCode'] == "VE"){
	
	include "content/robotics/es_ve/home.php";
	
}else{
	
	include "content/robotics/en_us/home.php";
	
}

?>

