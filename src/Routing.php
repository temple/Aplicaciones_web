<?php


use controller\HomeController;

class Routing
	implements RoutingInterface
{

	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->buildRoutes();
	}	
	public function buildRoutes(){

		$content = file_get_contents(__DIR__."/config/routes.json");
		$this->routes = json_decode($content); 
		// Guardamos en content el contenido (string) del archivo de rutas
		$this->routes = $this->routes instanceof \StdClass
						? $this->routes 
						: $GLOBALS['config'] ['routes']; 
	}
	
	// DONE: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
	// a la pregunta $this->routes instanceof \StdClass

	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 
}
