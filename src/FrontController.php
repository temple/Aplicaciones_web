<?php


class FrontController
{
	protected $routing;
	protected $request_uri;

	public function __construct(){
		$this->routing = new Routing();
	}

	public function run(){
 		$this->request_uri	= $_SERVER['REQUEST_URI'];
 		var_dump($this->request_uri);
	}

	//TODO: Que obtenga información del servidor en la que haya la ruta solicitada por el usuario en la request
	// p.e. que lo guarde en una variable una vez lo haya conseguido.
	
	//TODO: Esto lo tiene que hacer FrontController
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 

}