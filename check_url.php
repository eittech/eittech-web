<?php 

/* 
 * Capturamos la url, la separamos en segmentos por cada '/' encontrado, recorremos esos segmentos y tomamos el contenido del que 
 * corresponda a la página actual para capturar su nombre en una variable que luego colocaremos en el enlace de selección de idioma. 
 * 
 */

//~ $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = $_SERVER['REQUEST_URI'];  // Tomamos sólo la petición de la url para evitar conflictos con las extensiones y subdominios.

$segment_url = explode('/', $url);

$segment_url_page = "";

$page_name = "";

foreach($segment_url as $segment){

	$find   = '.';
	$quest = strpos($segment, $find);  // Buscamos el segmento cuya cadena contenga una extensión

	if ($quest === false) {
		
		$page_name = "index";
	
	}else{
		
		$segment_url_page = $segment;
		
		$page_name = explode('.', $segment_url_page);
		
		$page_name = $page_name[0];  // Tomamos la subcadena antes del '.'
		
	}
	
}

?>
