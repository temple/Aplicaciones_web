<?php


use controller\HomeController;

class Routing{

	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->buildRoutes();
	}
	// TODO: Implementar el método buildRoutes
	public function buildRoutes(){
		$contents = file_get_contents(__DIR__."/config/routes.json");
		//guardo en la variable $contents la informacion de routes.json
		// file_get_contents me devuelve un string que contiene todos los elementos del array del archivo routes.json
		$this->routes = json_decode($contents);
		// Convierte un string codificado en JSON a una variable de PHP.

		$this->routes = $this->routes instanceof \StdClass
		

	}	


	
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass

}
