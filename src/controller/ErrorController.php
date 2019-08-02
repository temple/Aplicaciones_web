<?php

namespace controller;
	use controller\IndexControllerInterface;
	use errors\PageNotFoundError;
	use controller\AbstractController;
//DONE:
// es: Determinar el namespace correcto
// en: Determine the right namespace

class ErrorController extends AbstractController{
	//DONE: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	implements IndexControllerInterface
	//DONE:
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	

	public function IndexAction($request,$params);
	//DONE:
	$response = new BinaryFileResponse(__DIR__.'/../view/error.html');
	$response->send();
	// es: Implementa la función y haz que muestre una vista de error
	// en: Implement function and make it show an error view

	//TODO:
	// es: Haz que la vista de error muestre el mensaje del error ocurrido
	// en: Make the error view show the message of the error 

}