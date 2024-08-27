
<?php

	// incluimos a User para poder hacer uso de la variable cargada en session
	include_once 'env.php';

	// Inicia la sesión
	session_start();

	// motor de plantillas
	include 'lib/kiwi/Kiwi.php';  

	// para pasar variables a las plantillas
	$vars = [];

	// por defecto se va a landing
	$controlador = "landing";

	// si pidieron una seccion lo llevamos a ella
	if(strlen($_GET['slug'])!=0){
		$controlador = $_GET['slug'];	
	}
	if(strlen($_GET['slug'])!=0){
		$page = explode("/",$_GET['slug']);
		$controlador = $page[0];	
	}
	include 'controllers/'.$controlador.'Controller.php';

 ?>