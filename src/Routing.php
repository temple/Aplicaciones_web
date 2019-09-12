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
		$this->buildRoutes();
	}
	public function buildRoutes(){
		$content = file_get_contents(__DIR__."/config/routes.json");
		
		$this->routes = json_decode($content); 
		
		$this->routes = $this->routes instanceof \StdClass
						  
	}
	public function getController(string $uri) : IdxController{
		$routesArray =  (array) $this->routes; 
		$uri =ltrim($uri , "/");
		$result = $routesArray [$uri]->controller;queremos 
		$result = is_null($result) 
				?"controller\\ErrorController" 
				:"controller\\".$result;
		$reflector = new \ReflectionClass($result); 
		return $reflector->newInstance(); 
	}
	public function getAction(string $uri) : string{
		$routesArray =  (array) $this->routes; 
		$uri =ltrim($uri , "/");
		$result = $routesArray [$uri]->action; 
		return is_null($result) 
				?"index" 
				:$result; 
	}
	
	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 
}

