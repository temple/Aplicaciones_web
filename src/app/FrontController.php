<?php

//include "config.php";
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
	}

	/**
	 * Función que se ejecuta para dar una respuesta
	 * a la petición.
	 * @internal Esta función se ejecuta desde index.php
	 * Si se comenta la línea en que se ejecuta run, la aplicación no se ejecuta
	 * 
	 */
	public function run()
	{
		// bad: opcache_reset();
		$this->request_uri = $_SERVER['REQUEST_URI'];
		$this->params = array_merge($_GET,$_POST);

		$controller = $this->routing->getController($this->request_uri);
		$action = $this->routing->getAction($this->request_uri);

		$request = $this->request_uri;
		//$controller->callAction($request, $action, $this->params);

		//Bad: $controller->callAction($request, $action, array('params' => $this->params,'request' => $request));

		//$controller->{$action."Action"}($request,$this->params);
		call_user_func_array([$controller,$action."Action"], [$request,$this->params]);
		exit;


	}

}