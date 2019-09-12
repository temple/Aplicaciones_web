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

	// TODO: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE

	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 


public function buildRoutes(){

		
		$content = file_get_contents(__DIR__."/config/routes.json");
				
		$this->routes = json_decode($content); 

		$this->routes = $this->routes instanceof \StdClass

		? $this->routes 
		: $GLOBALS['config'] ['routes'];
	}

public function getController(string $uri) : IdxController{
		$routesArray =  (array) $this->routes; 

		$uri =ltrim($uri , "/");// var to trim "/" of $uri
		$result = $routesArray [$uri]->controller; // var to store the string 
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
}