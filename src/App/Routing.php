<?php


use controller\HomeController;
use controller\AbstractController as IdxController;

class Routing
	implements RoutingInterface
{

	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->routes = (array) $GLOBALS['config'] ['routes'];
	}	

	
	public function getController(string $uri) : IdxController{

		$controller = $this->routes[$uri]->controller;
		$module = $this->routes [$uri]->module;
		
		$result = is_null($controller) 
				?"Error\\controller\\ErrorController" 
				:$module."\\controller\\".$controller; 

		$reflector = new \ReflectionClass($result); 
		return $reflector->newInstance(); 

	}


	public function getAction(string $uri) : string{
		$uri =trim($uri , "/");
		$result = $this->routes[$uri]->action; // se crea variable donde guardamos string que queremos 
		return is_null($result) // si $result es null o no está creado 
				?"index" //retorna "index"
				:$result; // si no es null retorna $result

	}
	
	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 
}
