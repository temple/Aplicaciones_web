<?php

use controller\HomeController;
use controller\AbstractController as IdxController;
include "config.php";
class Routing
	implements RoutingInterface
	//implementacion RoutingInterface
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
		$routes = $GLOBALS['config'] ['routes'];
		$contents = file_get_contents(__DIR__."/config/routes.json");
		//guardo en la variable $contents la informacion de routes.json
		// file_get_contents me devuelve un string que contiene todos los elementos del array del archivo routes.json
		$this->routes = json_decode($contents);
		// Convierte un string codificado en JSON a una variable de PHP.

		$this->routes = $this->routes instanceof \StdClass
		// en vez de utilizar if- else utilizo operadores ternarios
		// : ?
		? $this->routes
		//si  da como respuesta TRUE no hay cambios
		: $GLOBALS['config'] ['routes'];
		//si es lo contrario se diriga a routes para buscar el indice de rutas del array


	}	
	// DONE: Implementar el método buildRoutes
	
	public function getController(string $uri) : IdxController{
		$routesArray =  (array) $this->routes; // $this->routes es un OBJETO y necesitamos modificar a array.
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
	
	// TODO: Implementar las funciones necesarias 
	// para que Routing cumpla con la interfaz RoutingInterface 
}
