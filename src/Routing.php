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

		$contents = file_get_contents(__DIR__.'/config/routes.json');
		$this->routes =json_decode($contents);

		if (!($this->routes instanceof \StdClass)) {
			$this->routes = $GLOBALS['config']['routes'];
			
		}
	}

	// DONE: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass

}