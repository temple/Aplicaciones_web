<?php

namespace controller;
//TODO:
// es: Determinar el namespace correcto
// en: Determine the right namespace

class ErrorController
	//TODO: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	implements IndexControllerInterface
	//TODO:
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	

	public function IndexAction($request, $params);
	//TODO:
	// es: Implementa la función y haz que muestre una vista de error
	// en: Implement function and make it show an error view
	include _DIR_."/../view/error.php";
	//TODO:
	// es: Haz que la vista de error muestre el mensaje del error ocurrido
	// en: Make the error view show the message of the error 

}