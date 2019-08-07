<?php


use controller\HomeController;
include 'config.php';

class Routing{

	/**
	 * Objeto de tipo Routes
	 * @var \StdClass
	 */

	protected $routes;

	public function __construct(){
		$this->buildRoutes();

	}	



public function buildRoutes(){

	$contenido = file_get_contents(__DIR__."/config/routes.json");
// Guardamos el contenido de routes.json en String en la variable $contenido.

		$this->routes = json_decode($contenido); 
// Decodificamos el String de $contenido y lo guardamos en la propiedad $routes.

		$this->routes = $this->routes instanceof \StdClass
		// Si la propiedad routes es igual a \StdClass lo dejamos igual.
						? $this->routes 
		// Si no es asi, coge el indice routes del array de la variable global config.
						: $GLOBALS['config'] ['routes']; 
	



	// DONE: Implementar el método buildRoutes
	// la propiedad $routes tendrá que responder TRUE
	// a la pregunta $this->routes instanceof \StdClass
}

}