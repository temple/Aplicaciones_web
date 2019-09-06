<?php

include "config.php";
class FrontController
{
	/**
	 * Componente de enrutamiento que será del tipo RoutingInterface
	 * @var RoutingInterface
	 */
	protected $routing;

	public $request_uri;
	public function __construct()
		{

		$this->routing = new Routing();
		}


	//DONE Que obtenga información del servidor en la que haya la ruta solicitada por el usuario en la request
	// p.e. que lo guarde en una variable una vez lo haya conseguido.
	
	//DONE Esto lo tiene que hacer FrontController
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 
 	public function run()
 		{
 		$this->request_uri = $_SERVER['REQUEST_URI'];
 		}


}