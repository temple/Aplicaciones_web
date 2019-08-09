<?php


use controller\HomeController;

class Routing{

	/**
	 * Objeto de tipo Routes
	 * var \StdClass
	 */
	protected $routes;

	public function __construct(){
		$this->buildRoutes();
	}	

	public function buildRoutes(){
		$content = file_get_contents(__DIR__."/config.php");
		$this->routes = new \StdClass;
		var_dump($this->routes instanceof \StdClass);
	}

	// TODO: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass
	//Logra que en la propiedad $routes de Routing se carguen las rutas de config.php o alternativamente de routes.json

}