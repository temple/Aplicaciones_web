<?php

<<<<<<< HEAD
include "config.php";
=======
>>>>>>> kyomi_RoutingInterface
class FrontController
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

<<<<<<< HEAD
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
		$this->request_uri = $_SERVER['REQUEST_URI'];
		$this->params = array_merge($_GET,$_POST);

		$controller = $this->routing->getController($this->request_uri);
		$action = $this->routing->getAction($this->request_uri);
		
		$controller->callAction($request, $action, $this->params);
		//$controller->{$action."Action"}($request,$this->params);
		//call_user_func_array([$controller,$action."Action"], [$request,$this->params]);
		exit;


	}
=======
	protected $request_uri;
	
	public function __construct(){
		$this->routing = new Routing();
	}
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 
>>>>>>> kyomi_RoutingInterface

	public function run(){

	  $this->request_uri = $_SERVER["REQUEST_URI"];


    }

}
