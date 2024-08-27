<?php 

	// se muestra el contenido de SESSION (para debug)

	// crea el objeto con la vista
	$tpl = new Kiwi("panel");

	// carga la vista
	$tpl->loadTPL();
	// imprime en la vista en la página
	$tpl->printTPL();

 ?>