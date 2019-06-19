<?php

class UserLocalization{
	
	protected $ip;
	
	public function localization(){

		if (getenv('HTTP_CLIENT_IP')) {

			$this->ip = getenv('HTTP_CLIENT_IP');

		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {

			$this->ip = getenv('HTTP_X_FORWARDED_FOR');

		} elseif (getenv('HTTP_X_FORWARDED')) {

			$this->ip = getenv('HTTP_X_FORWARDED');

		} elseif (getenv('HTTP_X_CLUSTER_CLIENT_IP')) {

			$this->ip = getenv('HTTP_X_CLUSTER_CLIENT_IP');

		} elseif (getenv('HTTP_FORWARDED_FOR')) {

			$this->ip = getenv('HTTP_FORWARDED_FOR');

		} elseif (getenv('HTTP_FORWARDED')) {

			$this->ip = getenv('HTTP_FORWARDED');

		} else {

			$this->ip = $_SERVER['REMOTE_ADDR'];

		}

		//~ $this->ip = "35.231.11.86";
		//~ $this->ip = "187.26.41.16";
		//~ $this->ip = "163.172.160.190";

		$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$this->ip));
		
		return $meta;
		
	}
	
}

?>
