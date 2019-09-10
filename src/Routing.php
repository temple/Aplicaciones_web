<?php


use controller\HomeController;
use controller\AbstractController as IdxController;

class Routing
	implements RoutingInterface
{
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

		public function getController(string $uri) : IdxController{
		$routesArray =  (array) $this->routes; // $this->routes es un objeto y necesitamos modificar a array.
		$uri =ltrim($uri , "/");// se crea variable donde se elimina "/" de $uri
		$result = $routesArray [$uri]->controller; // se crea variable donde guardamos string que queremos 
		$result = is_null($result) // si $resultObject es null o no está creado 
				?"controller\\ErrorController" //retorna "index"
				:"controller\\".$result;
		$reflector = new \ReflectionClass($result); 
		return $reflector->newInstance(); 
	}

		public function getAction(string $uri) : string{
				$routesArray =  (array) $this->routes; // $this->routes es un objeto, se modifica a array.
				$uri =ltrim($uri , "/");// se crea variable donde se elimina "/" de $uri
				$result = $routesArray [$uri]->action; // se crea variable donde guardamos string que queremos 
				return is_null($result) // si $result es null o no está creado 
					?"index" //retorna "index"
					:$result; // si no es null retorna $result

	}

	// TODO: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE

}
