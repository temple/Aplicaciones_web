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
	// la propiedad $routes tendrá que responder TRUE
		// a la pregunta $this->routes instanceof \StdClass
	
public function buildRoutes(){
		
		$content = file_get_contents(_DIR_."/config/routes.json");
		//contenido JSON
		$this->routes = json_decode($content); 

		$this->routes = $this->routes instanceof \StdClass
						? $this->routes 
						: $GLOBALS['config'] ['routes']; 

	}


}