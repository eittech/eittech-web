<?php

// Variables de activación/desactivación del menú y el footer en las diferentes páginas. Valores posibles 0 o 1.

$config['config']['menu']['index']['active'] = 1;

$config['config']['menu']['service']['active'] = 1;

$config['config']['menu']['portfolio']['active'] = 1;

$config['config']['menu']['company']['active'] = 1;

$config['config']['menu']['contact']['active'] = 1;

$config['config']['footer']['index']['active'] = 1;

$config['config']['footer']['service']['active'] = 1;

$config['config']['footer']['portfolio']['active'] = 1;

$config['config']['footer']['company']['active'] = 1;

$config['config']['footer']['contact']['active'] = 1;

$config['config']['menu']['maintenance']['active'] = 0;

$config['config']['footer']['maintenance']['active'] = 1;

$config['config']['maintenance']['active'] = 1;  // Activar/desactivar la página de mantenimiento


// Aquí mismo hacemos la redirección a la página de mantenimiento si está activada y si no estamos ya en ella. Si se desactiva redirigimos al index.
if($page_name != 'maintenance'){
	
	if($config['config']['maintenance']['active'] == 1){
	
		header("Location: maintenance.php");
		
	}
	
}else{
	
	if($config['config']['maintenance']['active'] == 0){
	
		header("Location: index.php");
		
	}
	
}

?>
