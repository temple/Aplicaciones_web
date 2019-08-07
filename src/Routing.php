<?php


use controller\HomeController;
include config.php
class Routing{

	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->buildRoutes();
	}	

	// TODO: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass
	// a la pregunta $this->routes instanceof \StdClass


	public function buildRoutes(){
	//contenido JSON
		$content = file_get_contents(__DIR__."/config/routes.json");
				//Array con el contenido de json
		$this->routes = json_decode($content); 

		$this->routes = $this->routes instanceof \StdClass
						? $this->routes 
						: $GLOBALS['config'] ['routes']; 

	}

}
