<?php

use controller\HomeController;

class Routing{
	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->buildRoutes();
	}	

	public function buildRoutes(){
		$this->routes = $GLOBALS['config']['routes'];
		print($this->routes instanceof \StdClass);
		

	}

	// DONE: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass

}