<?php

namespace controller;
//TODO:
// es: Determinar el namespace correcto
// en: Determine the right namespace

class ErrorController
	extends AbstractController
	//TODO: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	implements IndexControllerInterface
	{	

		public $request;
		public $params;

		public function IndexAction	($request , $params){
			include __DIR__."/../view/error.html.php";
		}

	}