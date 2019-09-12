<?php


namespace Error\controller;
//require_once __DIR__.'/../app/controller/AbstractController.php';
use controller\AbstractController as IdxController;
//Done:
// es: Determinar el namespace correcto
// en: Determine the right namespace

 class ErrorController
 	extends IdxController
	//extends controller\AbstractController
	//done: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	//implements IndexControllerInterface
	//done:
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	

	public function indexAction($request,$params)

		{
		include __DIR__."/../view/vista-error.php";
	}
	//TODO:
	// es: Implementa la función y haz que muestre una vista de error
	// en: Implement function and make it show an error view

	//TODO (PAUSED):
	// es: Haz que la vista de error muestre el mensaje del error ocurrido
	// en: Make the error view show the message of the error 

}
