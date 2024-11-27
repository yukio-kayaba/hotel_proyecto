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
		static function VerHabitaciones(){
			require_once("./view/habitaciones.php");
		}
		static function Secion(){
			require_once("./view/iniciar_secion.php");
		}
		
		static function Fundadores(){
			require_once("./view/fundadores.php");
		}
		static function historial(){
			require_once("./view/historial.php");
		}
		

	}
?>
