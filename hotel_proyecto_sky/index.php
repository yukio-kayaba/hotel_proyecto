<?php
	require_once("config.php");
	require_once("controller/controlador.php");
	if(isset($_GET['vista'])){
		$url1 = explode("/",$_GET['vista']);
		if(method_exists("ModeloControlador",$url1[0])){
			// ModeloControlador::{$url[0]}();
			// print("variable "+$url[0]);
			// ModeloControlador::{$url1[0]}();
		} else {
			ModeloControlador::error_pagina();
		}
	}else {
		ModeloControlador::inicio();
	};
?>
