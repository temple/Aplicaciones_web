<?php

namespace controller;

use controller\IndexControllerInterface;

//TODO:
// es: Determinar el namespace correcto
// en: Determine the right namespace

class ErrorController extends AbstractController
	//TODO: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	//implements IndexControllerInterface
	//TODO:
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	

public function indexAction($request , $params) {
		include _DIR_."/../view/error.php";
	}
	//TODO:
	// es: Implementa la función y haz que muestre una vista de error
	// en: Implement function and make it show an error view

	//TODO:
	// es: Haz que la vista de error muestre el mensaje del error ocurrido
	// en: Make the error view show the message of the error 

}