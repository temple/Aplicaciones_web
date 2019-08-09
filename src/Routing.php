<?php


use controller\HomeController;

include "config.php";

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
		$routes = $GLOBALS['config'] ['routes'];
		
		$content = file_get_contents(__DIR__."/config/routes.json");

		$this->routes = json_decode($content); 
		
		$this->routes = $this->routes instanceof \StdClass
		? $this->routes 
		: $GLOBALS['config'] ['routes']; 
	}

	// TODO: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass
	//Logra que en la propiedad $routes de Routing se carguen las rutas de config.php o alternativamente de routes.json
}