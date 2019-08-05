<?php

//ini_set('display_errors', true);
//require_once __DIR__.'/../vendor/autoload.php';

class FrontController
{
	protected $routing;
	public $request_uri;

	public function __construct(){
		$this->routing = new Routing();

	}

	//TODO: Que obtenga información del servidor en la que haya la ruta solicitada por el usuario en la request
	// p.e. que lo guarde en una variable una vez lo haya conseguido.
	
	//TODO: Esto lo tiene que hacer FrontController
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 
 	public function run(){
 		$ruta = $_SERVER['REQUEST_URI'];
 		//var_dump("la ruta añadida a la dirección URL es:". $ruta);
 		
 		$this->request_uri	= $ruta;
 		var_dump($this->request_uri.  "\r");
 	}

}