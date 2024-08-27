<?php 

	// se muestra el contenido de SESSION (para debug)
	// crea el objeto con la vista
	$tpl = new Kiwi("detalle");

	// carga la vista
	$tpl->loadTPL();

	$tpl->setVarsTPL(["CHIPID"=> explode("/", $_GET['slug'])[1]]);
	// imprime en pantalla la página
	$tpl->printTPL();


 ?>