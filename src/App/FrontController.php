<?php

class FrontController
	implements ApplicationInterface
{
	/**
	 * Componente de enrutamiento que será del tipo RoutingInterface
	 * @var RoutingInterface
	 */
	protected $routing;
	
	/**
	 * Ruta que se está cargando desde el navegador después del dominio
	 * @var string
	 */
	public $request_uri;
	/**
	 * Información recibida a través de los parámetros de la URL
	 * o de los datos enviados mediante formulario
	 * o ambas cosas
	 * @var array
	 */
	public $params;

	/**
	 * Constructor
	 * Crea el componente de Routing que permitirá averiguar
	 * el controller y la acción que se ejecutarán para dar una respuesta
	 * a la petición ($_REQUEST)
	 */
	public function __construct()
	{
		$this->routing = new Routing();

		$request_uri= parse_url($_SERVER['REQUEST_URI']);
		$this->request_uri = trim($request_uri['path'],'/');
		$this->params = array_merge($_GET,$_POST);
	}

	/**
	 * Función que se ejecuta para dar una respuesta
	 * a la petición.
	 * @internal Esta función se ejecuta desde index.php
	 *  
	 */
	public function run()
	{
		$controller = $this->routing->getController($this->request_uri);
		$action = $this->routing->getAction($this->request_uri);
		
		$controller->callAction($this->request_uri, $action, $this->params);
		exit;
	}

}
