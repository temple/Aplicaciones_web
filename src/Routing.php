<?php


use controller\HomeController;

class Routing
	//implements RoutingInterface
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
	public function getController(string $uri) : IdxController{

	}


	public function getAction(string $uri) : string{
		$routesArray =  (array) $this->routes; // $this->routes es un objeto, se modifica a array.
		$uri =ltrim($uri , "/");// se crea variable donde se elimina "/" de $uri
		$result = $routesArray [$uri]->action; // se crea variable donde guardamos string que queremos 
		return is_null($result) // si $result es null o no está creado 
				?"index" //retorna "index"
				:$result; // si no es null retorna $result

	}
	
	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 
}
