<?php
	class ModeloControlador{
		public function __construct(){}
		static function error_pagina(){
			require_once("./view/error_pagina.php");
		}
		static function inicio(){
			require_once("./view/inicio.php");
		}
		static function principal_css(){
			require_once("./view/css/principal.css");
		}
		static function CrearCuenta(){
			require_once("./view/crear_cuenta.php");
		}
		
	}
?>
