<?php

use controller\AbstractController as IdxController;

/**
 * Interfaz para los Componentes de Enrutamiento
 */
interface RoutingInterface{
	
	/**
	 * Devuelve el controller encargado de atender una $uri
	 * Si el controller no existe devuelve un ErrorController
	 * @param  string $uri ruta solicitada por el usuario
	 * @return IndexControllerInterface objeto controller
	 */
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

	/**
	 * Devuelve la acción que habrá que ejecutarse
	 * o "index" por defecto
	 * @param  string $uri ruta solicitada por el usuario
	 * @return string|"index"   nombre de la acción a ejecutar
	 */
	public function getAction(string $uri) : string{
		$routesArray =  (array) $this->routes; // $this->routes es un objeto, se modifica a array.
		$uri =ltrim($uri , "/");// se crea variable donde se elimina "/" de $uri
		$result = $routesArray [$uri]->action; // se crea variable donde guardamos string que queremos 
		return is_null($result) // si $result es null o no está creado 
				?"index" //retorna "index"
				:$result; // si no es null retorna $result

	}
}