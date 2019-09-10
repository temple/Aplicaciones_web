<?php

namespace controller;
//Done:
// es: Determinar el namespace correcto
// en: Determine the right namespace

 class ErrorController
	extends AbstractController
	//done: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	//implements IndexControllerInterface
	//done:
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	

	public function IndexAction($params)
	{
		echo "Error!<br>";
		//echo "request:<br>";
		//var_dump($request);
		echo "params:<br>";
		var_dump($params);
	}
	//done:
	// es: Implementa la función y haz que muestre una vista de error
	// en: Implement function and make it show an error view

	//done:
	// es: Haz que la vista de error muestre el mensaje del error ocurrido
	// en: Make the error view show the message of the error 

}