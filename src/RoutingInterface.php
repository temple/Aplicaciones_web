<?php

use controller\HomeController;
use controller\AbstractController as IdxController;

/**
 * Interfaz para los Componentes de Enrutamiento
 */
interface RoutingInterface
{

	public function getController(string $uri) : IdxController;
		/*$routesArray =  (array) $this->routes; // $this->routes es un objeto y necesitamos modificar a array.
		$uri =ltrim($uri , "/");// se crea variable donde se elimina "/" de $uri
		$result = $routesArray [$uri]->controller; // se crea variable donde guardamos string que queremos 
		$result = is_null($result) // si $resultObject es null o no está creado 
				?"controller\\ErrorController" //retorna "index"
				:"controller\\".$result;
		$reflector = new \ReflectionClass($result); 
		return $reflector->newInstance(); */

	public function getAction(string $uri) : string;
}