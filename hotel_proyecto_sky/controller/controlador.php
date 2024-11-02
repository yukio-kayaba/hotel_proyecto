<?php
	class ModeloControlador{
public function __construct(){}
	static function error_pagina(){
		require_once("./view/error_pagina.php");
	}
	static function inicio(){
		require_once("./view/inicio.php");
	}
	}
?>
