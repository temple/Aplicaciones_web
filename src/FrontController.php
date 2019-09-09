<?php

ini_set('display_errors', true);
require_once __DIR__.'/../vendor/autoload.php';
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FrontController
{
	protected $routing;
	protected $request_uri;

	public function __construct(){
		$this->routing = new Routing();
	}

	//TODO: Que obtenga información del servidor en la que haya la ruta solicitada por el usuario en la request
	// p.e. que lo guarde en una variable una vez lo haya conseguido.
	
	//TODO: Esto lo tiene que hacer FrontController
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 

	public function run(){

		$ruta = $_SERVER["REQUEST_URI"];
		$this->request_uri = $ruta;	
		var_dump($this->request_uri);
						}

}
?>